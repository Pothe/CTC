<?php include'includes/header.php'; ?>
<?php include'includes/config.php'; ?>
<?php include'includes/functions.php'; ?>
<?php include'includes/menu.php'; ?>
<!-- POSTS -->
<section id="posts">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h4>Recent Students</h4>
                    </div>
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th><i class="fa fa-eye"></i></th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Register Date</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Post One</td>
                                <td>Web Development</td>
                                <td>May 10 2018</td>
                                <td>
                                    <a href="details.html" class="btn btn-secondary">
                                        <i class="fas fa-angle-double-right"></i> Details
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Post Two</td>
                                <td>Tech Gadgets</td>
                                <td>May 11 2018</td>
                                <td>
                                    <a href="details.html" class="btn btn-secondary">
                                        <i class="fas fa-angle-double-right"></i> Details
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Post Three</td>
                                <td>Web Development</td>
                                <td>May 13 2018</td>
                                <td>
                                    <a href="details.html" class="btn btn-secondary">
                                        <i class="fas fa-angle-double-right"></i> Details
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Post Four</td>
                                <td>Business</td>
                                <td>May 15 2018</td>
                                <td>
                                    <a href="details.html" class="btn btn-secondary">
                                        <i class="fas fa-angle-double-right"></i> Details
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Post Five</td>
                                <td>Web Development</td>
                                <td>May 17 2018</td>
                                <td>
                                    <a href="details.html" class="btn btn-secondary">
                                        <i class="fas fa-angle-double-right"></i> Details
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Post Six</td>
                                <td>Health & Wellness</td>
                                <td>May 20 2018</td>
                                <td>
                                    <a href="details.html" class="btn btn-secondary">
                                        <i class="fas fa-angle-double-right"></i> Details
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center bg-primary text-white mb-3">
                    <div class="card-body">
                        <h3>Posts</h3>
                        <h4 class="display-4">
                            <i class="fas fa-pencil-alt"></i> 6
                        </h4>
                        <a href="posts.html" class="btn btn-outline-light btn-sm">View</a>
                    </div>
                </div>

                <div class="card text-center bg-success text-white mb-3">
                    <div class="card-body">
                        <h3>Categories</h3>
                        <h4 class="display-4">
                            <i class="fas fa-folder"></i> 4
                        </h4>
                        <a href="categories.html" class="btn btn-outline-light btn-sm">View</a>
                    </div>
                </div>

                <div class="card text-center bg-warning text-white mb-3">
                    <div class="card-body">
                        <h3>Users</h3>
                        <h4 class="display-4">
                            <i class="fas fa-users"></i> 4
                        </h4>
                        <a href="users.html" class="btn btn-outline-light btn-sm">View</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 

    $query ="SELECT * FROM courses";
    $result = mysqli_query($conn,$query);
    if (!$result) {
        die("QUERY FAIL!".msyqli_error($conn));

    }
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['course_title'];
    }

 ?>
<!-- FOOTER -->
<footer id="main-footer" class="bg-dark text-white mt-5 p-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="lead text-center">
                    Copyright &copy;
                    <span id="year"></span> Blogen
                </p>
            </div>
        </div>
    </div>
</footer>


<!-- MODALS -->


<!-- ADD POST MODAL -->
<div class="modal fade" id="addPostModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Add Post</h5>
                <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-control">
                <option value="">Web Development</option>
                <option value="">Tech Gadgets</option>
                <option value="">Business</option>
                <option value="">Health & Wellness</option>
              </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Upload Image</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image">
                            <label for="image" class="custom-file-label">Choose File</label>
                        </div>
                        <small class="form-text text-muted">Max Size 3mb</small>
                    </div>
                    <div class="form-group">
                        <label for="body">Body</label>
                        <textarea name="editor1" class="form-control"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal">Save Changes</button>
            </div>
        </div>
    </div>
</div>

<!-- ADD CATEGORY MODAL -->
<div class="modal fade" id="addCategoryModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title">Add Category</h5>
                <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Save Changes</button>
            </div>
        </div>
    </div>
</div>

<!-- ADD USER MODAL -->
<div class="modal fade" id="addUserModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title">Add User</h5>
                <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password2">Confirm Password</label>
                        <input type="password" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-warning" data-dismiss="modal">Save Changes</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="addPostModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Add Post</h5>
                <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-control">
                <option value="">Web Development</option>
                <option value="">Tech Gadgets</option>
                <option value="">Business</option>
                <option value="">Health & Wellness</option>
              </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Upload Image</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image">
                            <label for="image" class="custom-file-label">Choose File</label>
                        </div>
                        <small class="form-text text-muted">Max Size 3mb</small>
                    </div>
                    <div class="form-group">
                        <label for="body">Body</label>
                        <textarea name="editor1" class="form-control"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal">Save Changes</button>
            </div>
        </div>
    </div>
</div>

<!-- ADD CATEGORY MODAL -->
<div class="modal fade" id="addCategoryModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title">Add Category</h5>
                <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Save Changes</button>
            </div>
        </div>
    </div>
</div>
                       
<!-- ADD USER MODAL -->
<div class="modal fade" id="RegisterModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white text-center">
                <h5 class="modal-title ">Register students</h5>
                <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
            </div>
            <div class="modal-body">
                <?php   
                  if(isset($_POST['submit'])){
                 
                    addStudent();

                  }
                
                ?>
                <form​​​ action="" method="POST" ​​ enctype="multipart/form-data">
                    <div class="form-group d-flex">


                        <input type="text" name="f_name" class="form-control mr-3" placeholder="First name">
                        <input type="text" name="l_name" class="form-control mr-3" placeholder="last Name">
                        <input type="text" name="e_name" class="form-control" placeholder="English name">
                    </div>
                    <div class="form-group d-flex">
                        <select name="gender" id="" class="form-control">
                                <option value="">Female</option>
                                <option value="">Male</option>
                            </select>
                        <input type="Date" name="dob" class="form-control ml-3" placeholder="Date of birth">

                    </div>
                    <div class="form-group">

                        <input type="text" name="pob" class="form-control" placeholder="Place of birth">
                    </div>
                    <div class="custom-file py-4">
                        <input type="file" name="profile" class="custom-file-input" required>
                        <label class="custom-file-label ">Upload profile</label>

                    </div>
                    <div class="form-group">

                        <input type="text" name="c_address" class="form-control" placeholder="Current address">
                    </div>
                    <div class="form-group d-flex">
                        <select name="courses" class="form-control text-uppercase mr-3" id="">
                            <?php 

                        $query ="SELECT * FROM courses";
                        $result = mysqli_query($conn,$query);
                        if (!$result) {
                            die("QUERY FAIL!".msyqli_error($conn));

                        }
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id =$row['id'];
                            $course_title = $row['course_title'];

                        ?>
                        <option class="text-uppercase" value="<?php echo $id; ?>"><?php echo $course_title;  ?></option>
                        <?php } ?>
                               
                        </select>
                        <Select name="times" class="form-control mr-2" name="s-time">

                            <?php 
                            $query ="SELECT * FROM s_times";
                            $result = mysqli_query($conn,$query);
                            if (!$result) {

                                die("QUERY FAIL!".mysqli_error($conn));

                                
                            }

                            while ($row = mysqli_fetch_array($result)) {
                                    $id = $row['id'];
                                    $times = $row['s_times'];

                                    ?>
                                    

                                     <option value="<?php echo $id ; ?>"><?php echo $times; ?></option>

                                    <?php }?>
                               
                                
                            </Select>
                        </select>
                        <Select name="days" class="form-control" name="s-day">
                            <?php 
                            $query ="SELECT * FROM days";
                            $result = mysqli_query($conn,$query);
                            if (!$result) {

                                die("QUERY FAIL!".mysqli_error($conn));

                                
                            }

                            while ($row = mysqli_fetch_array($result)) {
                                    $id = $row['id'];
                                    $days = $row['days'];

                                    ?>
                                    

                                     <option value="<?php echo $id ; ?>"><?php echo $days; ?></option>

                                    <?php }?>
                            
                            </Select>

                    </div>
                    <div class="form-group d-flex">
                        <input type="text" name="father" class="form-control mr-3" placeholder="Fill of student father">
                        <input type="text" name="f-nation" class="form-control mr-3" placeholder="Nation">
                        <input type="text" name="f-job" class="form-control mr-3" placeholder="Job">
                        <input type="text" name="f-phone" class="form-control" placeholder="Phone">
                    </div>
                    <div class="form-group d-flex">
                        <input type="text" name="mother" class="form-control mr-3" placeholder="Fill of student Mother">
                        <input type="text" name="m-nation" class="form-control mr-3" placeholder="Nation">
                        <input type="text" name="m-job" class="form-control mr-3" placeholder="Job">
                        <input type="text" name="m-phone" class="form-control  " placeholder="Phone">
                    </div>
                    <div class="form-group">
                        <input type="text" pc-address class="form-control" placeholder=" Current Address">
                    </div>

                    <div class="modal-footer">
                        <input type="submit" name="submit" class="btn btn-block btn-primary" data-dismiss="modal" value="save">
                    </div>
                    </form>
            </div>

        </div>
    </div>
</div>
<?php include'includes/footer.php'; ?>