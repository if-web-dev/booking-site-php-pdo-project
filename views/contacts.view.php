<div class="contact-wrapper hotel-bg">
        <div class="first-block" style="height: 30vh;">

        </div>

        <div class="second-block bg-secondary">
            <div class="container px-4">
                <div class="row g-5">
                  <div class="col-md-6 col-lg-3" >
                   <div class="border rounded bg-light col-size shadow-lg" >
                        <div class="content-center">
                            <div class="text-center">
                                <img src="<?= URL ?>/public/Assets/images/map.png" height="80" alt="map">
                                <br><br>
                                <h4>OUR MAIN OFFICE</h4>
                                <p>709 rue jean baptiste martini,<br>69400 Villefranche-sur-Saone</p>
                            </div>
                        </div>
                   </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                    <div class="border rounded bg-light col-size shadow-lg" >
                        <div class="content-center">
                            <div class="text-center">
                                <img src="<?= URL ?>/public/Assets/images/telephone.png" height="80" alt="telephone">
                                <br><br>
                                <h4>PHONE NUMBER</h4>
                                <p><br>04.74.02.86.99</p>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                    <div class="border rounded bg-light col-size shadow-lg" >
                        <div class="content-center">
                            <div class="text-center">
                                <img src="<?= URL ?>/public/Assets/images/fax.png" height="80" alt="fax">
                                <br><br>
                                <h4>FAX</h4>
                                <p><br>04.74.01.02.03</p>
                            </div>
                        </div>
                    </div>
                   </div>
                   <div class="col-md-6 col-lg-3">
                     <div class="border rounded bg-light col-size shadow-lg" >
                         <div class="content-center">
                             <div class="text-center">
                                <img src="<?= URL ?>/public/Assets/images/email.png" height="80" alt="email">
                                <br><br>
                                <h4>E-MAIL</h4>
                                <p><br>i.fouhal@hotmail.com</p>
                             </div>
                         </div>
                     </div>
                   </div>
                </div>
<!--GET IN TOUCH AND FORM-->
                <div class="row">

                    <div class="col-md col-lg-6 p-4 text-light">
                        <h3 class="my-3">GET IN TOUCH</h3>
                        <p><em>We can make america great again, yes we can.</em></p>
                        <p>Suscribe and make a better world for you and for me, complete de form. So this one's for all the lost children
                        This one's for all the lost children, wishing them well. And wishing them home.
                        When you sit there addressing, counting your blessings. Biding your time
                        When you lay me down sleeping and my heart is weeping. Because I'm keeping a place</p>
                        <div>
                            <h3 class="my-3">Follow Us</h3>
                            <img src="<?= URL ?>/public/Assets/images/facebook.png" class="mx-2" width="50" alt="logo-facebook">
                            <img src="<?= URL ?>/public/Assets/images/logo-twitter.png" class="mx-2" width="50" alt="logo-facebook">
                            <img src="<?= URL ?>/public/Assets/images/instagram.png" class="mx-2" width="50" alt="logo-facebook">
                        </div>
                    </div>
                    
                    <div class="col-sm col-lg-6 p-4" >

                        <div class="form-body">
                            <div class="row">
                                <div class="form-holder">
                                    <div class="form-content">
                                        <div class="form-items shadow-lg">
                                            <h3>Contact Us</h3>
                                            <p>Fill in the data below.</p>
                                            <form class="requires-validation" method="post" action="contacts#contact-form" novalidate id="contact-form">
                    
                                                <div class="col-md-12">
                                                   <input class="form-control" type="text" name="contact_name" placeholder="Full Name" required>
                                                </div>
                    
                                                <div class="col-md-12">
                                                    <input class="form-control" type="email" name="contact_email" placeholder="E-mail Address" required>
                                                </div>
                    
                                                <div class="col-md-12">
                                                    <textarea class="form-control mt-3" name="contact_msg" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" required></textarea>
                                                </div>
                    
                                                <div class="col-md-12 mt-3">
                                                    <label class="mb-3 mr-1" for="gender">Gender: </label>
                    
                                                    <input type="radio" class="btn-check" name="gender" id="male" autocomplete="off" required>
                                                    <label class="btn btn-sm btn-outline-secondary" for="male">Male</label>
                    
                                                    <input type="radio" class="btn-check" name="gender" id="female" autocomplete="off" required>
                                                    <label class="btn btn-sm btn-outline-secondary" for="female">Female</label>
                    
                                                    <input type="radio" class="btn-check" name="gender" id="secret" autocomplete="off" required>
                                                    <label class="btn btn-sm btn-outline-secondary" for="secret">Secret</label>
                                              
                                                </div>
                    
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                                    <label class="form-check-label">I confirm that all data are correct</label>
                                                </div>
                    
                                                <div class="form-button mt-3">
                                                    <input id="submit" type="submit" name="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" ></input>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>