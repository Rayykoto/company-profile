@extends('web.default')

@section('content')

<section id="kosong">
    <div class="container">
    </div>
</section>

<section id="contact">
    <div class="container">
        <h3>Contact Us</h3>
    </div>
</section>

<section id="form-contact">
    <div class="container">
        <div class="row">
            <div class="form-group col-md-8">
                <form>
                    <div class="row">
                        <div class="form-group col">
                         <label></label>
                            <input type="text" class="form-control" placeholder="First name">
                        </div>
                        <div class="form-group col">
                        <label></label>
                            <input type="text" class="form-control" placeholder="Last name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                         <label></label>
                            <input type="number" class="form-control" placeholder="Phone Number">
                        </div>
                        <div class="form-group col">
                        <label></label>
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                        <label></label>
                            <textarea class="form-control" id="message" rows="10" placeholder="Message"></textarea>
                        </div>
                        <div class="card-header bg-transparent">
                            <button type="button" class="btn btn-outline-dark">Send</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
            <label></label>
                <div class="card border-dark mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Office</h5>
                        <i class="fas fa-map-marker"></i>
                        Jl. Boulevard Barat Raya Blok LC7 No.15<br> &nbsp; &nbsp; Kelapa Gading Barat, Jakarta
                        <br>
                        <i class="fas fa-phone-alt"></i>
                        +62 21 2245 2345 (Hunting)<br> &nbsp; &ensp;
                        +62 21 4587 6191
                        <br>
                        <i class="fas fa-fax"></i>
                        +62 21 4587 6084
                        <br><br>
                        <h5 class="card-title">Marketing Representative</h5>
                        <i class="fas fa-phone-alt"></i>
                        +62 812 2277 0702
                        <br>
                        <i class="fas fa-envelope"></i>
                        marketing@wynacom.com
                        <br><br>
                        <h5 class="card-title">24/7 Technical Support Representative</h5>
                        <i class="fas fa-phone-alt"></i>
                        +62 812 6868 6823 (Office Hour)<br>&nbsp; &ensp;
                        +62 812 6868 6832 (Non Office Hour)
                        <br>
                        <i class="fas fa-envelope"></i>
                        support@wynacom.com
                        <br><br>
                        <h5 class="card-title">Social Media</h5>
                        <i class="fab fa-facebook-f"></i> &emsp;
                        <i class="fab fa-linkedin-in"></i> &emsp;                 
                        <i class="fab fa-instagram"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="maps">
    <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.8091574236396!2d106.89681631399458!3d-6.156309062052771!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5ce06e414f1%3A0xe2b431c2145a129!2sPT.%20WYNACOM%20UNITAMA%20SEJAHTERA!5e0!3m2!1sid!2sid!4v1667803881775!5m2!1sid!2sid" width="1300" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>


@endsection
