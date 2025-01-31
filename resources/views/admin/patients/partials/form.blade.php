<x-alert/>

@csrf()
<input type="text" name="des_regis" placeholder="CPF:" value="{{ $patient->des_regis ?? old('des_regis')}}">
<input type="text" name="first_name" placeholder="Nome:" value="{{ $patient->first_name ?? old('first_name')}}">
<input type="text" name="last_name" placeholder="Sobrenome:" value="{{ $patient->last_name ?? old('last_name')}}">
<input type="text" name="gender" placeholder="Gênero:" value="{{ $patient->gender ?? old('gender')}}">
<input type="text" name="nacionality" placeholder="Nacionalidade:" value="{{ $patient->nacionality ?? old('nacionality')}}">
<input type="text" name="blood_type" placeholder="Tipo sanguíneo:" value="{{ $patient->blood_type ?? old('blood_type')}}">
<input type="text" name="birthdate" placeholder="Data de nascimento:" value="{{ $patient->birthdate ?? old('birthdate')}}">
<input type="email" name="email" placeholder="E-mail:" value="{{ $patient->email ?? old('email')}}">
<input type="password" name="password" placeholder="Senha:">
<button type="submit">Salvar</button>