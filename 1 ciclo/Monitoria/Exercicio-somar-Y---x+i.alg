algoritmo "Lista3-Ex13"

// ** Equa��o do segundo grau - Ler os coeficientes a, b e c de uma equa��o de
//    segundo grau e, antes de calcular as ra�zes, calcula o delta. Se este for
//    negativo, informa que a equa��o n�o tem solu��o real. Se for zero, mostra
//    a �nica raiz. Se positivo, mostra as duas ra�zes.


var
   i,x,y:inteiro
inicio
// Se��o de Comandos

   escreva("Valor de A: ")
   leia(x)

   i:=1
   repita
         y:=y+(x+i)
         i:=i+1
   ate(i>10)
   escreval("O Calculo de Y �: ",y)

   i:=1
   y:=0
   enquanto i <=10 faca
            y:=y+(x+i)
            i:=i+1
   fimenquanto
   escreva("O Calculo de Y �: ",y)

   // i = 11
   // x = 0
   // y = 55
fimalgoritmo
