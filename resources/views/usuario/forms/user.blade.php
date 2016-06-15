			<div class="form-group ">
				{!!Form::label('Nombre de usuario:')!!}
				{!!Form::text('name',null,['class'=> 'form-control','placeholder'=>'Ingresa el nombre del usuario'])!!}
			</div>

			<div class="form-group ">
				{!!Form::label('Correo electrónico:')!!}
				{!!Form::text('email',null,['class'=> 'form-control','placeholder'=>'Ingresa el correo'])!!}
			</div>

			<div class="form-group ">
				{!!Form::label('Contraseña:')!!}
				{!!Form::password('password',['class'=> 'form-control','placeholder'=>'Ingresa la contraseña'])!!}
			</div>