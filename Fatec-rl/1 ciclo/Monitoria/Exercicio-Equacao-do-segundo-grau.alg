algoritmo "Lista3-Ex13"

// ** Equa��o do segundo grau - Ler os coeficientes a, b e c de uma equa��o de
//    segundo grau e, antes de calcular as ra�zes, calcula o delta. Se este for
//    negativo, informa que a equa��o n�o tem solu��o real. Se for zero, mostra
//    a �nica raiz. Se positivo, mostra as duas ra�zes.


var
   a,b,c:inteiro
   delta,x1,x2:real
inicio
// Se��o de Comandos

   escreval("Para a esqua��o do segundo Grau Digite o")
   escreva("Valor de A: ")
   leia(a)
   escreva("Valor de B: ")
   leia(b)
   escreva("Valor de C: ")
   leia(c)
   
   delta:= b^2-4*a*c
   escreval("Delta: ",delta)
   
   se delta < 0 entao
        escreval("a equa��o n�o tem solu��o real!")
   senao
        x1:= (-b + raizq(delta)) /(2*a)
        x2:= (-b - raizq(delta)) /(2*a)
        escreval("x1",x1)
        escreval("x2",x2)
   fimse
   
fimalgoritmo
