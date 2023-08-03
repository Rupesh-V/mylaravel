<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Forgot password</title>
	<link rel="stylesheet" href="{{  asset('bootstrap/css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/my-login.css') }}">
</head>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center align-items-center h-100">
				<div class="card-wrapper">
                @if(session('message'))
      <div class="alert alert-success">{{session('message')}}</div>
      @endif
					<div class="cardx fat">
                   		<div class="card-body">
							<h4 class="card-title">Forgot Password</h4>
							<form method="POST" action="{{URL::to('/reset')}}"  >
                                @csrf

                             
								<div class="form-group">
									<label for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter your email">
                                   @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Send Password Link
									</button>
								</div>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>

	
</body>
</html>