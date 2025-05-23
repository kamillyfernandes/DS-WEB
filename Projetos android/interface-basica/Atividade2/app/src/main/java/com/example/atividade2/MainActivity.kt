package com.example.atividade2

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.activity.enableEdgeToEdge
import androidx.compose.foundation.layout.Arrangement
import androidx.compose.foundation.layout.Box
import androidx.compose.foundation.layout.Column
import androidx.compose.foundation.layout.Spacer
import androidx.compose.foundation.layout.fillMaxHeight
import androidx.compose.foundation.layout.fillMaxSize
import androidx.compose.foundation.layout.fillMaxWidth
import androidx.compose.foundation.layout.height
import androidx.compose.foundation.layout.size
import androidx.compose.foundation.shape.CircleShape
import androidx.compose.material3.Card
import androidx.compose.material3.Surface
import androidx.compose.material3.Text
import androidx.compose.runtime.Composable
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.text.TextStyle
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp
import com.example.atividade2.ui.theme.Atividade2Theme


class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        enableEdgeToEdge()
        setContent {
            Atividade2Theme {
                MyApp()

            }
        }
    }
}

@Composable
fun MyApp() {
    Surface(
        modifier = Modifier.fillMaxHeight().fillMaxWidth(),
        color = Color(0xFF93DEEF),//Aplicando cor //ARGB
    ) {
        Column( //centralizando no centro
            verticalArrangement = Arrangement.Center,
            horizontalAlignment = Alignment.CenterHorizontally
        ) {
            Text(
                text = "Garrafinha",
                style = TextStyle(
                    color = Color.White,
                    fontSize = 40.sp
                )
            )
            Text(
                text = "R$140.90",
                style = TextStyle(
                    color = Color.White,
                    fontSize = 39.sp
                )

            )

            //sp=apenas para textos, aumento de


            Spacer(modifier = Modifier.height(50.dp)) // espaço entre texto e botao
            CreateCircle()
        }
    }
}

//Criaremos o Circulo que receberá o toque do usuário


@Composable
fun CreateCircle() {

    Card(
        modifier = Modifier
            .size(160.dp), // Define o tamanho do círculo
        shape = CircleShape // Formato circular
    ) {
        Box(
            modifier = Modifier.fillMaxSize(),
            contentAlignment = Alignment.Center
        ) { //alinhando conteudo no e Adicionando texto ao circulo
            Text(text = "Comprar")
        }
    }
}



