<header class="masthead">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-70 align-items-center justify-content-center text-center">
        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Contact</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5"></p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        <form method="post" action="<?php echo base_url('SendMail/sendMail') ?>">
                        <div class="form-floating mb-3">
                            <div class="container mt-5">
                                <form method="post" action="<?php echo base_url('SendMail/sendMail') ?>">
                                    <div class="form-group">
                                        <label>                                           
                                            <p class="text-white-75 eb-2">Entrer votre mail :</p>
                                        </label>
                                        <input type="text" name="mailTo" class="form-control">
                                    </div>      
                                    <div class="form-group"> 
                                        <br>          
                                        <label>
                                            <p class="text-white-75 eb-2">Objet :</p>
                                        </label>
                                        <input type="text" name="subject" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>
                                            <br>
                                        <p class="text-white-75 eb-2">Votre message :</p>
                                        </label>
                                        <textarea rows="6" type="text" name="message" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block">Soumettre</button>
                                    </div>
                        </form>
                    </div>   
                    <div class="row gx-4 gx-lg-5 justify-content-center">
                        <div class="col-lg-4 text-center mb-5 mb-lg-0">
                            <i class="bi-phone fs-2 mb-3 text-muted"></i>
                            <div>
                            <p class="text-white-75 eb-2">+33 6 64 13 87 08</p>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        </div>
    </div>
</header>