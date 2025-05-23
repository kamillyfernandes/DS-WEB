package com.example.atividade3
import android.os.Bundle
import android.util.Log
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.activity.enableEdgeToEdge
import androidx.compose.foundation.clickable
import androidx.compose.foundation.layout.Arrangement
import androidx.compose.foundation.layout.Box
import androidx.compose.foundation.layout.Column
import androidx.compose.foundation.layout.Spacer
import androidx.compose.foundation.layout.fillMaxHeight
import androidx.compose.foundation.layout.fillMaxSize
import androidx.compose.foundation.layout.fillMaxWidth
import androidx.compose.foundation.layout.height
import androidx.compose.foundation.layout.padding
import androidx.compose.foundation.layout.size
import androidx.compose.foundation.shape.CircleShape
import androidx.compose.material3.Card
import androidx.compose.material3.Surface
import androidx.compose.material3.Text
import androidx.compose.runtime.Composable
import androidx.compose.runtime.getValue
import androidx.compose.runtime.mutableStateOf
import androidx.compose.runtime.remember
import androidx.compose.runtime.setValue
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.text.TextStyle
import androidx.compose.ui.tooling.preview.Preview
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp
import com.example.atividade3.ui.theme.Atividade3Theme


class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        enableEdgeToEdge()
        setContent {
            Atividade3Theme {
                MyApp()

            }
        }
    }
}

@Composable
fun MyApp(){
    var moneyCounterA by remember { mutableStateOf(0) }
    var moneyCounterB by remember { mutableStateOf(0) }// o estado muda rebember é pra lembra que o valor muda
    Surface(
        modifier = Modifier.fillMaxHeight().fillMaxWidth(),
        color = Color((0xFF0293cf)) //Aplicando cor //ARGB=alpha, red, green, blue
    ) {
        Column( //centralizando no centro
            verticalArrangement = Arrangement.Center,
            horizontalAlignment = Alignment.CenterHorizontally
        ) {
            Text(
                text = "Time A",
                style = TextStyle(color = Color(0xFF77ddf2),
                    fontSize = 40.sp)
            )
            Text(
                text = "$moneyCounterA",
                style = TextStyle(color = Color.White,
                    fontSize = 39.sp)
            )

            //sp=apenas para textos, aumento de



            Spacer(modifier = Modifier.height(100.dp)) //dp= objetos
            CreateCircle(moneyCounterA) { moneyCounterA += 1 }

            Spacer(modifier = Modifier.height(100.dp)) // espaço entre Time A e Time B


            // TIME B
            Text(
                text = "Time B",
                style = TextStyle(color = Color(0xFF77ddf2),
                    fontSize = 40.sp)
            )
            Text(
                text = "$moneyCounterB",
                style = TextStyle(color = Color.White,
                    fontSize = 39.sp)
            )

            Spacer(modifier = Modifier.height(16.dp))
            CreateCircle(moneyCounterB) { moneyCounterB += 1 }
        }
    }
}


//Criaremos o Circulo que receberá o toque do usuário

@Composable
fun CreateCircle(moneyCounter: Int, onTap: () -> Unit) {

    Card(
        modifier = Modifier
            .padding(3.dp) // Espaçamento externo
            .size(150.dp) // Altura e largura iguais
            .clickable {
                onTap()
                Log.d("Contador", "CreateCircle: $moneyCounter")
            },  //com a virgula porque o modifer acabou aqui
        shape = CircleShape // Formato circular
    ) {
        Box(
            modifier = Modifier.fillMaxSize(),
            contentAlignment = Alignment.Center
        ) { //alinhando conteudo no centro Text(text = "Tap") //Adicionando texto ao circulo
            Text(text = "Add")
        }
    }
}


@Preview(showBackground = true)
@Composable
fun GreetingPreview() {
    Atividade3Theme {
        MyApp()
    }
}