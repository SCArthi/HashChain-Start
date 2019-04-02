
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">HC</h1>

            </div>
            <h3>Welcome to User Login Page</h3>
            
            <form class="m-t" role="form" id="form" action="<?php echo base_url('Dashboard/userdashboard');?>">
                <div id="pwd-container3">
                    <div class="form-group">
                        <input type="text" class="form-control" id="username" placeholder="Username" required="">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control example3" id="password3" placeholder="Password" required="">
                        
                    </div>
                    <div class="form-group">
                        <div class="pwstrength_viewport_progress2"></div>
                    </div>
                    <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                    <a href="<?php echo base_url('Password/forgotPassword');?>"><small>Forgot password?</small></a>
                </div>
            </form>
           
        </div>
    </div>
