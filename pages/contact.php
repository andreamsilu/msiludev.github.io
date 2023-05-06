<?php include('../header.php'); ?>
<main>
    <div class="container">
        <h1>Contact Us</h1>
        <div class="row">
            <div class="col-md-6">
                <form>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
            <div class="col-md-6">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Sinza Mori, 669M+C4J, Dar es Salaam&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                        <a href="https://capcuttemplate.org/">Capcuttemplate.org</a>
                    </div>
                    <style>
                    .mapouter{
                        position:relative;
                        text-align:right;
                        width:100%;
                        height:400px;
                    }
                    .gmap_canvas {
                        overflow:hidden;
                        background:none!important;
                        width:100%;
                        height:400px;
                    }
                    .gmap_iframe {
                        height:400px!important;
                    }
                    </style>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include('footer.php'); ?>
