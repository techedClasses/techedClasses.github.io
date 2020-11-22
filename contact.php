<?php $page='contact' ?>
<title>Teched Class Contact page</title>

<?php include("assets/php/header.php") ?>
<div class="container register contact-form">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="img/logo_white.png" alt=""/>
            <h3>Welcome</h3>
            <p>Teched Classes For Professional Learning!</p>
        </div>
        <div class="col-md-9 register-right">
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Mail</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Contact Us</h3>
                    <div class="row register-form">
                        <div class="col-md-12">
                            <div class="form-group">
                                <i class="fas fa-envelope"></i>
                                infoattechedclasses@gmail.com
                            </div>
                            <div class="form-group">
                                <i class="fab fa-facebook"></i>techedclasses
                            </div>
                            <div class="form-group">
                                <i class="fab fa-instagram-square"></i>teched_
                            </div>
                            <div class="form-group">
                                <i class="fas fa-phone"></i>9582562722
                            </div>
                            <div class="form-group">
                                <div class="maxl">
                                    <i class="fab fa-youtube"></i>teched classes
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h3  class="register-heading">Request Your Query</h3>
                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Youre Name *" value="" />
                            </div>
                            
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea name="messege" class="form-control" placeholder="Your query" cols="30" rows="6"></textarea>
                            </div>
                            <input type="submit" class="btnRegister"  value="Submit"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("assets/php/footer.html") ?>
    