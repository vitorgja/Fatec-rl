algoritmo "Lista3-Ex11"
// Função :
// Autor :
// Data : 10/09/2014
// Seção de Declarações 
var
   i,ant,prox,temp,n:inteiro
inicio
// Seção de Comandos


   escreva("Digite um Numero: ")
   leia(n)
   // atribuiçao
   i:=1
   ant:=0
   prox:=1
   temp:=0
   
   enquanto (i <= n) faca
            ant:= prox
            prox:= temp
            temp:= ant+prox
            
            escreva(temp)
            i:=i+1
   fimenquanto
   
fimalgoritmo
