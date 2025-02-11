//montante
var C = Number.parseInt(prompt("Digite o capital inicial investido"))//capital
var T = Number.parseInt(prompt("Digite o tempo investido em meses"))//tempo
var i = Number.parseInt(prompt("Digite a taxa em porcentagem"))//taxa

var M = ((C * (1+(i/100)) ** T)) //descobrindo p montante
alert (M.toFixed(2)) //limitando o decimal






