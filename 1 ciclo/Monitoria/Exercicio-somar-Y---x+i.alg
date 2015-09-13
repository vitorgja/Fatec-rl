algoritmo "Lista3-Ex13"

// ** Equação do segundo grau - Ler os coeficientes a, b e c de uma equação de
//    segundo grau e, antes de calcular as raízes, calcula o delta. Se este for
//    negativo, informa que a equação não tem solução real. Se for zero, mostra
//    a única raiz. Se positivo, mostra as duas raízes.


var
   i,x,y:inteiro
inicio
// Seção de Comandos

   escreva("Valor de A: ")
   leia(x)

   i:=1
   repita
         y:=y+(x+i)
         i:=i+1
   ate(i>10)
   escreval("O Calculo de Y é: ",y)

   i:=1
   y:=0
   enquanto i <=10 faca
            y:=y+(x+i)
            i:=i+1
   fimenquanto
   escreva("O Calculo de Y é: ",y)

   // i = 11
   // x = 0
   // y = 55
fimalgoritmo
