


    
        
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content p-4">
                    <button type="button" class="close x" id="formClose" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-header border-0 mb-2">
                        <h5 class="modal-title" id="exampleModalLabel">CureCo</h5>
                        <button type="button" class="close" aria-label="Close" disabled='true'>
                           
                        </button>
                    </div>
                    <div class="modal-body">
                        <h3 class="mb-4 title">LOGIN</h3>
                        <form class="form-login" id="formLogin"  method="POST" action="<?php url('home/index') ?>">
                        <div class="form-group">
                            <input type="text" name="username" id="username" class="form-control p-0" 
                                style="box-shadow: none;border-radius:0px">
                            <label class="form-control-placeholder p-0" for="name">Username</label>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control p-0" 
                                style="box-shadow: none;border-radius:0px">
                            <label class="form-control-placeholder p-0" for="password">Password</label>
                        </div>
                        <div class="form-group ">
                           <?php echo $test  ?> 
                        </div>


                    </div>
                    <div class="modal-footer border-0 mb-4">
                        <button type="submit" name="submit" class="btn login col-6 col-md-6" >Login</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
        <script src= <?php url ('Public\js\validation.js')?> ></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>