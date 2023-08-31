<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="content">
<div class="container">
	 <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                    <div class="box">
                        <h3 class="box-title">Select Your Hosting Plan</h3>
                        <div class="plan-selection">
                            <div class="plan-data">
                                <form method="post" action="/session">
                                    <input id="question1" name="question" type="radio" class="with-font" value="sel" />
                                    <input id="token" name="_token" type="hidden" class="with-font" value="{{csrf_token()}}" />
                                    <input id="rate" name="total" type="hidden" class="with-font" value="400" />
                                    <input id="product" name="product" type="hidden" class="with-font" value="1 install | 25K visits/month | 10 GB local storage" />
                                    <label for="question1">Personal</label>
                                    <p class="plan-text">
                                        1 install | 25K visits/month | 10 GB local storage</p>
                                    <span class="plan-price">$29 / mo</span><br /><br />
                                    <a href="{{url('/')}}" class="btn btn-primary">Continue</a><br /><br />
                                    <button type="submit" class="btn btn-primary">Checkout</button>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                    
                   
                </div>
            </div>
	<div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  text-center mt20">
              Created for <a href="https://goo.gl/XwHgxp" target="_blank">easetemplate</a>
              </div></div>
	
	
	
	
	
</div>
</div>