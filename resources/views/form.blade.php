
<div class="form-row align-items-center">
    <div class=" col-sm-12 col-md-12 col-lg-4">
        <label for="nome-cliente">Nome</label>
        <div class="input-group mb-2">
            <div class="input-group-prepend">
                <span class="input-group-text material-icons" >account_circle</span>
            </div>
            <input type="text" name="nome" id="nome-cliente" class="form-control" placeholder="Digite..."  data-toggle="tooltip" data-placement="bottom" title="Digite o nome do Cliente">
        </div>
    </div>
    <div class=" col-sm-12 col-md-12 col-lg-4">
        <label for="sobrenome-cliente">Sobrenome</label>
        <div class="input-group mb-2">
            <div class="input-group-prepend">
                <span class="input-group-text material-icons">supervised_user_circle</span>
            </div>
            <input type="text" name="sobrenome" id="sobrenome-cliente" class="form-control" placeholder="Digite..." data-toggle="tooltip" data-placement="bottom" title="Digite o sobrenome do Cliente">
        </div>
    </div>
    <div class=" col-sm-12 col-md-12 col-lg-4">
        <label for="email-cliente">Email</label>
        <div class="input-group mb-2">
            <div class="input-group-prepend">
                <span class="input-group-text material-icons" >alternate_email</span>
            </div>
            <input type="email" name="email" id="email-cliente" class="form-control" placeholder="Digite..."  data-toggle="tooltip" data-placement="bottom" title="Digite o email do Cliente">
        </div>
    </div>
</div>
<div class="form-row align-items-center">

    <div class=" col-sm-12 col-md-12 col-lg-6">
        <label for="telefone-principal">Telefone Principal</label>
        <div class="input-group mb-2">
            <div class="input-group-prepend">
                <span class="input-group-text material-icons">phone_forwarded</span>
            </div>
            <input type="text" name="telefone[]" id="telefone-principal" class="form-control" placeholder="Digite..." data-toggle="tooltip" data-placement="bottom" title="Digite o número de telefone do Cliente">
        </div>
    </div>
    <div class=" col-sm-12 col-md-12 col-lg-6">
        <label for="telefone-recado">Telefone Recado</label>
        <div class="input-group mb-2">
            <div class="input-group-prepend">
                <span class="input-group-text material-icons">phone_forwarded</span>
            </div>
            <input type="text" name="telefone[]" id="telefone-recado" class="form-control" placeholder="Digite..." data-toggle="tooltip" data-placement="bottom" title="Digite o número de telefone do Cliente">
        </div>
    </div>
</div>
<div class="form-row align-items-center">
    <div class=" col-sm-12 col-md-12 col-lg-6 my-1">
        <label class="mr-sm-2" for="estado">Estado</label>
        <div class="input-group mb-2">
            <div class="input-group-prepend">
                <span class="input-group-text material-icons" >location_on</span>
            </div>
            <select class="custom-select mr-sm-2" id="estado" name="estado">
                <option selected>Escolher...</option>
                <option value="Minas Gerais">Minas Gerais</option>
                <option value="Rio de Janeiro">Rio de Janeiro</option>
                <option value="Santa Catarina">Santa Catarina</option>
                <option value="São Paulo">São Paulo</option>
            </select>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-6 my-1">
        <label class="mr-sm-2" for="pais">País</label>
        <div class="input-group mb-2">
            <div class="input-group-prepend">
                <span class="input-group-text material-icons" >map</span>
            </div>
            <select class="custom-select mr-sm-2" id="pais" name="pais">
                <option selected>Escolher...</option>
                <option value="Brasil">Brasil</option>
            </select>
        </div>
    </div>
</div>
