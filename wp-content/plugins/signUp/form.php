<script src="https://www.google.com/recaptcha/api.js"></script>

<p class="titulo-cotizador">
    Create User
</p>
<form action="#" method="post">
    <input type="hidden" name="action" value="SEND-EMAIL">
    <div class="container-box-form">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="username" style="margin-top:15px;">Username</label>
                    <input name="username" type="email" class="form-control" required="required" >
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="password" style="margin-top:15px;">Password</label>
                    <input name="password" type="text" class="form-control" required="required" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="question" style="margin-top:15px;">Security Question</label>
                    <input name="question" type="text" class="form-control" required="required" >
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="answer" style="margin-top:15px;">Security Answer</label>
                    <input name="answer" type="text" class="form-control" required="required" >
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <input type="submit" value="Enviar" class="ui-button buttonl">
                </div>
            </div>
        </div>
        
        

		<div class="row">
			<div class="col-lg-12">
            	<div class="g-recaptcha" data-sitekey="6Lflus4aAAAAAJmxNYd1fDnOiDRRvamjqXNjblkX"></div>
            </div>
		</div>
		
		<?php if (isset($creado) && $creado): ?>
            <div class="row">
                <div class="col-lg-12">
                    <p class="success-cotizador">User Created successfully.</p>
                </div>
            </div>
		<?php endif; ?>
    </div>
</form>


<script>
      grecaptcha.enterprise.ready(function() {
          grecaptcha.enterprise.execute('site_key', {action: 'homepage'}).then(function(token) {
            console.log("asa")
          });
      });
      </script>


<style>

    p.success-cotizador {
        color: #f5d0d0;
        text-align: center;
        font-size: 19px;
        font-weight: bold;
    }

    .buttonl {
        color: #fff;
        display: inline !important;
        padding: 0 28px 0 23px;
        font-family: Arial, serif, sans-serif;
        font-size: 20px;
        background: #0c5b9e !important;
        border: 2px solid white !important;
        border-radius: 10px !important;
        width: auto;
        padding: 0 40px !important;
        margin-top: 40px !important;
        margin-bottom: 20px !important;
        float: none;
    }

    .ui-button, .ui-cancel {
        background: none;
        border: 0;
        cursor: pointer;
        display: inline-block;
        height: auto;
        overflow: visible;
        padding: 0;
        margin: 0;
        vertical-align: middle;
        outline: none;
        text-align: center;
        white-space: nowrap;
        cursor: pointer;
    }

    .container-box-form .form-control {
        font-weight: 500 !important;
        font-family: Arial, serif, sans-serif;
    }

    .titulo-cotizador {
        font-size: 18px !important;
        font-family: Arial !important;
        color: #207AF1 !important;
        text-align: center;
        font-weight: bold;
    }

    .container-box-form {
        background-color: #42a5e4;
        padding: 20px;
        border: 1px solid #fff;
        border-radius: 3px;
    }

    .container-box-form label {
        margin-bottom: 0;
        color: white;
    }
</style>