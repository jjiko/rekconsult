@if(isset($mailSent))
    <div class="row" style="margin-top: 2rem">
        <div class="col">
            <div class="alert alert-success">
                <h4 class="alert-heading">Thank you!</h4>
                <p>Your inquiry has been sent to us.</p>
            </div>
        </div>
    </div>
@endif
<div class="row" style="margin-top: 4rem">
    <div class="col-12 col-md-4">
        <h3 style="line-height:1.5">Take a bold stride into the future with automation and accountability.</h3>
    </div>
    <div class="col-12 col-md-8" style="margin-bottom: 2rem;">
        <section id="contact">
            <form method="post">
                <input name="fromUrl" type="hidden" value="{{ request()->url() }}">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" id="name" name="name" placeholder="Your name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" id="email" name="email" placeholder="email@example.com">
                </div>
                <div class="form-group">
                    <label for="inquiry">Inquiry</label>
                    <textarea id="inquiry" name="inquiry" class="form-control"></textarea>
                </div>
                <button class="btn btn-primary btn-lg">Send</button>
            </form>
        </section>
    </div>
</div>