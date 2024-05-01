function exibirMensagemCamposVazios() {
    alert("Por favor, preencha todos os campos obrigatórios!");
}

function ValidarTipoDoacao(id_nome, div_id) {
    if ($("#" + id_nome).val().trim() == '') {
        alert("Preencher o campo tipo doação");
        $("#" + id_nome).focus();
        $("#" + div_id).addClass("has-error");
        return false;
    }
}


function ValidarCargo() {
    if ($("#cargo").val().trim() == '') {
        alert("Preencher o campo: nome do cargo.");
        $("#cargo").focus();
        $("#divCargo").addClass("has-error");

        return false;
    } else {
        $("#divCargo").removeClass("has-error").addClass("has-success")
    }
}

function ValidarEvento() {
    if ($("#nome_evento").val().trim() == '') {
        alert("Preencher o campo: nome do evento !");
        $("#nome_evento").focus();
        $("#divEvento").addClass("has-error")

        return false;
    }
    else {
        $("#divEvento").removeClass("has-error").addClass("has-success")
    }

    if ($("#data_inicio").val().trim() == '') {
        alert("Preencher o campo: data inicial !");
        $("#data_inicio").focus();
        $("#divData_inicio").addClass("has-error")

        return false;
    }
    else {
        $("#divData_inicio").removeClass("has-error").addClass("has-success")
    }

    if ($("#hora_inicio").val().trim() == '') {
        alert("Preencher o campo: horário inicial !");
        $("#hora_inicio").focus();
        $("#divHora_nicio").addClass("has-error")

        return false;
    }
    else {
        $("#divHora_inicio").removeClass("has-error").addClass("has-success")
    }

    if ($("#data_fim").val().trim() == '') {
        alert("Preencher o campo: Data final!");
        $("#data_fim").focus();
        $("#divData_fim").addClass("has-error")

        return false;
    }
    else {
        $("#divData_fim").removeClass("has-error").addClass("has-success")
    }

    if ($("#hora_fim").val().trim() == '') {
        alert("Preencher o campo: Horário final !");
        $("#hora_fim").focus();
        $("#divHora_fim").addClass("has-error")

        return false;
    }
    else {
        $("#divHora_fim").removeClass("has-error").addClass("has-success")
    }
}

function ValidarEntidade() {
    if ($("#cnpj").val().trim() == '') {
        alert("Preencher o campo: CNPJ");
        $("#cnpj").focus();
        $("#divCnpj").addClass("has-error")

        return false;
    }
    else {
        $("#divCnpj").removeClass("has-error").addClass("has-success")
    }

    if ($("#tel_fixo").val().trim() == '') {
        alert("Preencher o campo: Telefone fixo !");
        $("#tel_fixo").focus();
        $("#divTel").addClass("has-error")

        return false;
    }
    else {
        $("#divTel").removeClass("has-error").addClass("has-success")
    }

    if ($("#cep").val().trim() == '') {
        alert("Preencher o campo: CEP !");
        $("#cep").focus();
        $("#divCep").addClass("has-error")

        return false;
    }
    else {
        $("#divCep").removeClass("has-error").addClass("has-success")
    }

    if ($("#rua").val().trim() == '') {
        alert("Preencher o campo: Rua !");
        $("#rua").focus();
        $("#divRua").addClass("has-error")

        return false;
    }
    else {
        $("#divRua").removeClass("has-error").addClass("has-success")
    }

    if ($("#bairro").val().trim() == '') {
        alert("Preencher o campo: Bairro !");
        $("#bairro").focus();
        $("#divBairro").addClass("has-error")

        return false;
    }
    else {
        $("#divBairro").removeClass("has-error").addClass("has-success")
    }

}

function ValidarEntidadeConsulta() {
    if ($("#nome_entidade").val().trim() == '') {
        alert("Preencher o campo: Nome da entidade !")
        $("#nome_entidade").focus();
        $("#divNome").addClass("has-error")

        return false;
    }
    else {
        $("#divNome").removeClass("has-error").addClass("has-success")
    }
}

function ValidarEntidadeAlterar() {
    if ($("#cnpj").val().trim() == '') {
        alert("Preencher o campo: CNPJ");
        $("#cnpj").focus();
        $("#divCnpj").addClass("has-error")

        return false;
    }
    else {
        $("#divCnpj").removeClass("has-error").addClass("has-success")
    }


    if ($("#tel_fixo").val().trim() == '') {
        alert("Preencher o campo: Telefone fixo !");
        $("#tel_fixo").focus();
        $("#divTel").addClass("has-error")

        return false;
    }
    else {
        $("#divTel").removeClass("has-error").addClass("has-success")
    }

    if ($("#cep").val().trim() == '') {
        alert("Preencher o campo: CEP !");
        $("#cep").focus();
        $("#divCep").addClass("has-error")

        return false;
    }
    else {
        $("#divCep").removeClass("has-error").addClass("has-success")
    }

    if ($("#rua").val().trim() == '') {
        alert("Preencher o campo: Rua !");
        $("#rua").focus();
        $("#divRua").addClass("has-error")

        return false;
    }
    else {
        $("#divRua").removeClass("has-error").addClass("has-success")
    }

    if ($("#bairro").val().trim() == '') {
        alert("Preencher o campo: Bairro !");
        $("#bairro").focus();
        $("#divBairro").addClass("has-error")

        return false;
    }
    else {
        $("#divBairro").removeClass("has-error").addClass("has-success")
    }

}

function ValidarContato() {
    if ($("#tipo").val().trim() == '') {
        alert("Preencher o campo: Tipo !");
        $("#tipo").focus();
        $("#divTipo").addClass("has-error")

        return false;
    }
    else {
        $("#divTipo").removeClass("has-error").addClass("has-success")
    }

    if ($("#nome").val().trim() == '') {
        alert("Preencher o campo: Nome !");
        $("#nome").focus();
        $("#divNome").addClass("has-error")

        return false;
    }
    else {
        $("#divNome").removeClass("has-error").addClass("has-success")
    }

    if ($("#tel_fixo").val().trim() == '') {
        alert("Preencher o campo: Telefone fixo !");
        $("#tel_fixo").focus();
        $("#divTel").addClass("has-error")

        return false;
    }
    else {
        $("#divTel").removeClass("has-error").addClass("has-success")
    }

}

function ValidarDoacao() {

    if ($("#nome").val().trim() == '') {
        alert("Preencher o campo: Nome !");
        $("#nome").focus();
        $("#divNome").addClass("has-error")

        return false;
    }
    else {
        $("#divNome").removeClass("has-error").addClass("has-success")
    }

    if ($("#cpf_usuario").val().trim() == '') {
        alert("Preencher o campo: CPF !");
        $("#cpf_usuario").focus();
        $("#divCpf").addClass("has-error")

        return false;
    } else {
        $("#divCpf").removeClass("has-error").addClass("has-success")
    }

    if ($("#tel_usuario").val().trim() == '') {
        alert("Preencher os campos: Telefone !");
        $("#tel_usuario").focus();
        $("#divTel").addClass("has-error")

        return false;
    } else {
        $("#divTel").removeClass("has-error").addClass("has-success")
    }

    if ($("#evento").val().trim() == '') {
        alert("Preencher o campo: Evento !");
        $("#evento").focus();
        $("#divEvento").addClass("has-error")

        return false;
    } else {
        $("#divEvento").removeClass("has-error").addClass("has-success")
    }

    if ($("#tipo").val().trim() == '') {
        alert("Preencher o campo: Tipo !");
        $("#tipo").focus();
        $("#divTipo").addClass("has-error")

        return false;
    } else {
        $("#divTipo").removeClass("has-error").addClass("has-success")
    }

    if ($("#qtd").val().trim() == '') {
        alert("Preencher o campo: Quantidade !");
        $("#qtd").focus();
        $("#divQtd").addClass("has-error")

        return false;
    } else {
        $("#divQtd").removeClass("has-error").addClass("has-success")
    }
}