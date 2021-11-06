<!DOCTYPE html>
<html>
    <head>
        <html lang="pt-br">
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Protocolo de glicemias</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.6.3.min.js"> </script>
        <script id="test" type="application/json" src="http://myresources/stuf.json"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script> 
    </head>
    <body>       
        <form action="destino_conexao_Pdo.php" method="post" target="_blank" >
            <section>
                <div class="imagem"></div>
                <h1> Glicemias e Correções</h1> 
                <div class="GlicemiaEstilo"> Glicemia (mg/dL): </div> 
                <div class="numeroglicemia">
                    <input type="number" name="data[associado][glicemia]" class="glicemia"> </div> 
                <div class="NomeEstilo">
                    <label for="nome">*Nome Completo:</label></div>
                    <input type="text" class="nome" name="data[associado][nome]" autocomplete="off" id="nome" >
                <div class="DataDeNascimento">
                    <label for="dataNascimento">*Data de Nascimento:</label></div>
                    <input type="date" class="data_nascimento" name="data[associado][data_nascimento]" >
                <div class="tipo"> *Tipo de Diabetes </div>
                <div class="tipos">
                    <label class="container"> TIPO I:</label>
                    <input type="radio" class="TipoDeDiabetes1" name="data[associado][tipo_diabetes]" value="1">
                    <label class="container2"> TIPO II:</label>
                    <input type="radio" class="TipoDeDiabetes2" name="data[associado][tipo_diabetes]" value="2"> 
                </div>
                <div class="endereco">*CEP:</div> <input type="number" name="data[associado][cep]" class="cep" min="1">
                <input type="text" name="data[associado][logradouro]" class="logradouro" placeholder="*RUA" required minlength="4">
                <input type="text" name="data[associado][bairro]" class="bairro" id="bairro" placeholder="BAIRRO" required minlength="4">
                <input type="text" name="data[associado][cidade]" class="cidade" placeholder="*CIDADE" required minlength="4">
                <input type="text" name="data[associado][estado]" class="estado" placeholder="*UF" required minlength="4">
                <input type="submit" value="Cadastrar" class="cadastrar">
            </section>
        </form>
            <div class="modal fade" id="meuModal">
                <div class="modal-dialog modal-dialog-centered modal-sm" >
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modalTitulo" id="meuTitulo">CEP INVÁLIDO</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modalCorpo">Este cep está errado, são necessários oito algarismos! Ex.: 33200100.</div>
                    </div>
                </div>
            </div>
    </body>
    <script type="text/javascript">
        $(".cep").change(function(){

            var cep = $(".cep").val();
            var url = "https://viacep.com.br/ws/"+cep+"/json/";

            if (cep.length == 8){
                $.ajax({
                    url: url,
                    type: "get",
                    dateType:"json",
                    data: {cep: cep},
                    success: function(result){
                        $(".bairro").val(result.bairro);
                        $(".cidade").val(result.localidade);
                        $(".estado").val(result.uf);
                        $(".logradouro").val(result.logradouro);
                    }
                })
            } else {
                $("#meuModal").modal('show');
            };
        });
         
    </script>
</html>
