<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6  subheader-solid " id="kt_subheader">
        <div class=" container-fluid  d-flex align-items-cjustify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-cflex-wrap mr-1">

                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">
                        Modify User </h5>
                    <!--end::Page Title-->

                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <span href="" class="text-muted">
                                Users </span>
                        </li>
                        <li class="breadcrumb-item">
                            <span href="" class="text-muted">
                                Modify User </span>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->

            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!--begin::Actions-->
                <?php
                include("./components/signInTime.php");


                ?>
                <!--end::Dropdown-->
            </div>
            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->

    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container ">
            <div class="row">
                <div class="col-lg-12">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b example example-compact">
                        <div class="card-header">
                            <h3 class="card-title">
                                View User Credentials
                            </h3>

                        </div>
                        <!--begin::Form-->
                        <form class="form" id="add_new_user" method="POST" action="./server/form/handleUpdateUser.php">
                            <div class="card-body">
                                <?php
                                include("./components/alertHandler.php");
                                $UserID = $_GET["UserID"];
                                $userData = FetchUserProfileByID($UserID);
                                ?>
                                <div class="form-group row">


                                    <div class="col-lg-4">
                                        <label>User ID:</label>
                                        <input value="<?php echo $UserID ?>" readonly name="user_ID" type="hidden" class="form-control" placeholder="User ID number">
                                        <input value="<?php echo substr($UserID, 0, 6) ?>" readonly name="user" type="text" class="form-control" placeholder="User ID number">
                                        <span class="form-text text-muted">Please User ID</span>
                                    </div>
                                    <input type="hidden" value="<?php echo $_SESSION["user_id"] ?>" name="editor_user_ID">

                                    <div class="col-lg-4">
                                        <label>User Position:</label>
                                        <input value="<?php echo $userData["user_position"] ?>" name="user_position" type="text" class="form-control" placeholder="Position">
                                        <span class=" form-text text-muted">Please Position</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>User First Name:</label>
                                        <input name="user_f_name" value="<?php echo $userData["user_f_name"] ?>" type="text" class="form-control" placeholder="First Name">
                                        <span class=" form-text text-muted">Please First Name</span>
                                    </div>


                                </div>


                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>User Last Name:</label>
                                        <input name="user_l_name" value="<?php echo $userData["user_l_name"] ?>" type="text" class="form-control" placeholder="Last Name">
                                        <span class=" form-text text-muted">Please Last Name</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>User Email:</label>
                                        <input name="user_email" value="<?php echo $userData["user_email"] ?>" type="email" class="form-control" placeholder="User Email">
                                        <span class=" form-text text-muted">Please User Email</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Account Type:</label>
                                        <div class="radio-inline">
                                            <label class="radio radio-solid">
                                                <input <?php echo (int)$userData["user_type_id"] === 1 ? 'checked' : "" ?> type="radio" name="user_type" value="1">
                                                <span></span>
                                                Admin
                                            </label>
                                            <label class="radio radio-solid">
                                                <input <?php echo (int)$userData["user_type_id"] === 2 ? 'checked' : "" ?> type="radio" name="user_type" value="2">
                                                <span></span>
                                                Editor
                                            </label>
                                            <label class="radio radio-solid">
                                                <input <?php echo (int)$userData["user_type_id"] === 0 ? 'checked' : "" ?> type="radio" name="user_type" value="0">
                                                <span></span>
                                                No Permissions
                                            </label>


                                        </div>
                                        <span class="form-text text-muted">Please select user type</span>
                                    </div>


                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label>Password:</label>
                                        <input value="<?php echo $userData["user_password"] ?>" readonly name="user_password" type="Password" class="form-control" placeholder="User Password">
                                        <span class=" form-text text-muted">Please user default password</span>
                                    </div>
                                </div>

                                <!-- begin: Example Code-->

                                <!-- end: Example Code-->
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-lg-4"></div>
                                    <div class="col-lg-8">
                                        <input type="submit" name="UpdateUserSubmit" class="btn btn-primary mr-2" value="Submit">

                                        <a href="./?action=allUsers" type="reset" class="btn btn-secondary">Cancel</a>
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter">
                                            Delete
                                        </button>
                                        <div class="modal fade " id="exampleModalCenter" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content ">
                                                    <div class="modal-header bg-danger ">
                                                        <h5 class="modal-title text-white" id="exampleModalLabel">Confirm Delete</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <i aria-hidden="true" class="ki ki-close"></i>
                                                        </button>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                                                        <input type="submit" name="DeleteUser" value="Delete" class="btn btn-danger font-weight-bold">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Card-->

                    <!--begin::Card-->

                    <!--end::Card-->
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>