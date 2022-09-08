         
   <?php $baseurl = "https://webdesignpreviews.com/html/thehouseofauthors"; ?>



<div class="col-sm-9 ban-form">
                    <form class="cmxform" id="bannerform" method="POST" action="<?php echo $baseurl."/leads/index.php" ?>">
                        <input type="text" class="jun" name="gender">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="bannerform-heading ">
                                    <h3 style="margin-bottom: 30px">SIGN UP FOR<span> EXPERT CONSULTATION </span>& AVAIL EXCLUSIVE DISCOUNTS
                                    </h3>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="fldset">
                                    <input id="username" name="name" minlength="2" type="text" placeholder="Enter your name *" required="">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="fldset">
                                    <input id="cemail" type="email" name="email" placeholder="Enter email here *" required="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="fldset">
                                    <input onkeypress="return isNumberKey(event);" id="" maxlength="10" minlength="10" name="phone" type="number" placeholder="Phone Number *" required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="fldset">
                                    <select name="services" id="services" class="frm-select">
                                        <option value="" disabled="" selected="">Services</option>
                                        <option value="Ghost Writing">Ghost Writing</option>
                                        <option value="Editing">Editing</option>
                                        <option value="Publishing">Publishing</option>
                                        <option value="Proofreading">Proofreading</option>
                                        <option value="Audio Book">Audio Book</option>
                                        <option value="Book Cover">Book Cover</option>
                                        <option value="Book Promotio">Book Promotion</option>
                                        <option value="Formatting">Formatting</option>
                                        <option value="e-Book Writing">e-Book Writing</option>
                                        <option value="Blog Writing">Blog Writing</option>
                                        <option value="Website Content Writing">Website Content Writing</option>
                                        <option value="Article Writing">Article Writing</option>
                                        <option value="Book Video Trailer">Book Video Trailer</option>
                                        <option value="Author Website">Author Website</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="fldset">
                                    <select name="budget" id="budget" class="frm-select">
                                        <option value="" disabled="" selected="">Budget</option>
                                        <option value="Below 2000">Below 2000</option>
                                        <option value="Upto 3000">Upto 3000</option>
                                        <option value="Upto 4000">Upto 4000</option>
                                        <option value="Upto 5000">Upto 5000</option>
                                        <option value="Upto 6000">Upto 6000</option>
                                        <option value="Upto 7000">Upto 7000</option>
                                        <option value="Upto 8000">Upto 8000</option>
                                        <option value="Upto 9000">Upto 9000</option>
                                        <option value="Upto 10000">Upto 10000</option>
                                        <option value="Above 10000">Above 10000</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="fldset">
                                    <input placeholder="Tell Us About Your Book" name="brief">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="fldset">
                                    <input onclick="form.submit()" name="submit" type="submit" placeholder="Connect With Us" required="">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
