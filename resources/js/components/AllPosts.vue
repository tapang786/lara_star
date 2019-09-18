<template>
    <div class="container">
        <div class="row">
            <div class="col-12">
                
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Posts</h3>
                <div class="card-tools">
                    <button type="submit" class="btn btn-success" @click="myModal">Add New <i class="fas fa-user-plus"></i></button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                <thead>
                                    <tr role="row">
                                        <!-- <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">#</th> -->
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Title</th>
                                        <!-- <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Categories</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Tags</th> -->
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Status</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Date</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending"></th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr role="row" class="even" v-for="post in posts" :key="post.id">
                                        <!-- <td class="sorting_1">{{user.id}}</td> -->
                                        <td>{{post.title['rendered']}}</td>
                                        
                                        <td>{{post.status}}</td>
                                        <td>{{post.date | myDate}}</td>
                                        <td>
                                            <a href="#" @click="editModal(user)">
                                                <i class="fa fa-edit green" ></i>
                                            </a> / 
                                            <a href="#" @click="deleteUser(user.id)">
                                                <i class="fa fa-trash red"></i>
                                            </a>
                                        </td>
                                    
                                    </tr>
                                </tbody>
                
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled" id="example2_previous">
                                        <a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                    </li>
                                    <li class="paginate_button page-item active">
                                        <a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                    </li>
                                    <li class="paginate_button page-item ">
                                        <a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                                    </li>
                                    <li class="paginate_button page-item ">
                                        <a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                                    </li>
                                    <li class="paginate_button page-item ">
                                        <a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                                    </li>
                                    <li class="paginate_button page-item ">
                                        <a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                                    </li>
                                    <li class="paginate_button page-item ">
                                        <a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0" class="page-link">6</a>
                                    </li>
                                    <li class="paginate_button page-item next" id="example2_next">
                                        <a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        
            </div>
        <!-- /.col -->
        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 v-show="editmode" class="modal-title">Edit User's Info</h4>
                        <h4 v-show="!editmode" class="modal-title">Add New User</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <form @submit.prevent="editmode ? updateUser() : createUser()">
                    <div class="modal-body">
                        <div class="form-group">
                            <input v-model="form.name" type="text" name="name" placeholder="Name"
                                class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                            <has-error :form="form" field="name"></has-error>
                        </div>
                        <div class="form-group">
                            <input v-model="form.email" type="email" name="email" placeholder="Email Address"
                                class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                            <has-error :form="form" field="email"></has-error>
                        </div>
                        <!-- <div class="form-group">
                            <input v-model="form.email" type="email" name="email" placeholder="Email Address"
                                class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                            <has-error :form="form" field="email"></has-error>
                        </div> -->
                        <div class="form-group">
                            <input v-model="form.password" type="password" name="password" placeholder="Password"
                                class="form-control" :class="{ 'is-invalid': form.errors.has('password') }">
                            <has-error :form="form" field="password"></has-error>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button v-show="editmode" type="submit" class="btn btn-success" >Update</button>
                        <button v-show="!editmode" type="submit" class="btn btn-primary" >Create</button>
                    </div>
                    </form>
                </div>
            
            </div>
        </div>
        <!-- / Modal -->
    </div>
</template>

<script>
    export default {
        data() {
            return {
                editmode : false,
                users: {},
                posts: {},
                form: new Form({
                    id : '',
                    name : '',
                    email : '',
                    password : ''
                }),
                postsData: {
                    per_page: 10,
                    page: 1
                },
            }
        },
        methods: {
            updateUser(){
                // console.log('Tapan Ghosh is Greate');
                this.$Progress.start();
                this.form.put('api/users/'+this.form.id)
                .then(()=>{
                    
                    $('#myModal').modal('hide');   
                    Swal.fire(
                            'Updated!',
                            'Information has been updated.',
                            'success'
                        )
                    this.$Progress.finish();
                    Fire.$emit('AfterCreate');
                })
                .catch(()=>{
                    this.$Progress.fail();
                });
            },
            editModal(user){
                this.editmode = true,
                this.form.clear();
                this.form.reset();
                $('#myModal').modal('show'); 
                this.form.fill(user);
            },
            myModal(){
                this.editmode = false;
                this.form.reset();
                $('#myModal').modal('show'); 
            },
            displayPosts() {
                
                var xhr = new XMLHttpRequest()
                var self = this
                xhr.open('GET', 'https://www.efriends.info/wp-json/wp/v2/posts')
                xhr.onload = function() {
                    self.post = JSON.parse(xhr.responseText);
                    self.posts = self.post;
                    //console.log(self.posts[0].link);
                }
                xhr.send();
                
                /* axios.create({ baseURL: 'https://www.efriends.info/wp-json/wp/v2/posts/'})
                    .get('posts').then((response) => {
                        this.posts = response.data;
                        this.configPagination(response.headers);
                    
                })
                .catch( (error) => {
                        console.log(error);
                }); */
                
            },
            deleteUser(id){

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                })
                .then((result) => {
                    if(result.value) {
                        this.form.delete('api/users/'+id).then(() => {
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            )
                            Fire.$emit('AfterCreate');
                        }).catch(() => {
                            Swal.fire('Failed!', 'There was something error.', 'warning');
                        });
                    }
                })
            },
            createUser() { 
                this.$Progress.start();
                this.form.post('api/users')
                .then(()=> {
                    Fire.$emit('AfterCreate');
                    $('#myModal').modal('hide');   
                    Toast.fire({
                        type: 'success',
                        title: 'User Created successfully'
                        });
                    this.$Progress.finish();
                })
                .catch(()=>{

                })

            }
        },
        created() {
            this.displayPosts();
            Fire.$on('AfterCreate',() => {
                this.displayPosts();
            });
        }
    }
</script>



