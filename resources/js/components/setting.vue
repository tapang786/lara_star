<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Site Setting</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" @submit.prevent="updateSiteSetting">
                <div class="card-body">
                  <div class="form-group">
                    <label for="siteTitle">Title</label>
                    <input type="text" v-model="form.site_title" class="form-control" id="siteTitle" placeholder="Site Title">
                  </div>
                  <div class="form-group">
                    <label for="siteDescription">Description</label>
                    <textarea  v-model="form.site_desc"  placeholder="Description" class="form-control"></textarea>
                  </div>
                  <div class="form-group row">
                      <div class="col-md-8">
                          <label for="siteLogo">Site Logo</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" @change="logoUpdate" class="custom-file-input" name="site_logo" id="siteLogo">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                
                            </div>
                      </div>
                      <div class="col-md-4">
                          <img :src="getSiteLogo()" class="img-thumbnail" style="height:150px;">
                      </div>
                    
                  </div>
                  <!-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div> -->
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Save</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                siteData : {},
                form: new Form ({
                    id : '',
                    site_title : '',
                    site_desc : '',
                    site_logo : '',
                    
                })
            }
        },        
        methods: {
            displaySiteData(){
                axios.get("api/site_setting").then(({data}) => ((this.siteData = data.data), this.form.fill(data)));
                //console.log(this.siteData);
            },
            updateSiteSetting(){
                this.$Progress.start();
                this.form.put('api/site_setting/'+this.form.id)
                .then(()=>{
                    Toast.fire({
                        type: 'success',
                        title: 'Setting Update Successfully'
                    });
                    this.$Progress.finish();
                })
                .catch(()=>{
                    this.$Progress.fail();
                    Swal.fire({
                        type: 'error',
                        tilte: 'Opps....',
                        text: 'Somethings Wrongs.',
                    })
                });
            },
            logoUpdate(e){
                let file = e.target.files[0];
                let reader  = new FileReader();
                //console.log(file);
                let vm = this;
                if(file['size'] < 2111775) {
                     reader.onloadend = function (file) {
                        //preview.src = reader.result;
                        //console.log(file);
                        vm.form.site_logo = reader.result;
                    }
                    reader.readAsDataURL(file);
                }else {
                    Swal.fire({
                        type: 'error',
                        tilte: 'Opps....',
                        text: 'file size too large.',
                    })
                    
                }

            },
            getSiteLogo(){
                let logo = (this.form.site_logo.length > 200) ? this.form.site_logo : "/images/" + this.form.site_logo;
                return logo; //"/images/profile/"+this.form.photo;
            },
        },
        mounted() {
            console.log('Component mounted.')
        },
        created(){
            this.displaySiteData();
        }
    }
</script>
