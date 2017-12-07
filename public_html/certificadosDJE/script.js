/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function verifica(){
    var nomeInserido = document.getElementsByClassName("nome");
    var cpfMentor;
    var cpf = document.getElementById("cpf").value;
    var base = ['46707621840','92466630982','93131399791','36421232876','35360789824','2481880110','48167595811','48117553830',
    '93131399791','35360789824','17217921805','49669169844','49138898825','47571181801','43463567881','5622771102','51278474854',
    '92466630982','35360789824','92466630982','42513170091','21971527858','95622810000','65377370872','65377370872','18625504760',
    '37795860885','37795860885','37795860885','37795860885','37795860885','38780255809','35360789824','14585297898','27039489805',
    '15819628861','158196288','15819628861','27039489805','99550806120','37676315808'];

for(var i = 0; i < base.length; i++){
    if(cpf == base[i]){
        window.open("certificado.html");
        cpfMentor = base[i];
    }
    else{
        document.getElementById("notify").innerHTML = "<p id='notify'> CPF não localizado.</p>";
        }
        nomesCadastrados = nomeInserido;
    }
}


/*function Mudarestado(el) {
        var display = document.getElementById(el).style.display;
        if(display == "none")
            document.getElementById(el).style.display = 'block';
        else
            document.getElementById(el).style.display = 'none';
    }*/
