package com.example.atividade1
import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.activity.enableEdgeToEdge
import androidx.compose.foundation.layout.Arrangement
import androidx.compose.foundation.layout.Box
import androidx.compose.foundation.layout.Column
import androidx.compose.foundation.layout.fillMaxHeight
import androidx.compose.foundation.layout.fillMaxSize
import androidx.compose.foundation.layout.fillMaxWidth
import androidx.compose.foundation.layout.height
import androidx.compose.foundation.layout.padding
import androidx.compose.foundation.layout.width
import androidx.compose.material3.Card
import androidx.compose.material3.CardDefaults
import androidx.compose.material3.Surface
import androidx.compose.material3.Text
import androidx.compose.runtime.Composable
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.graphics.RectangleShape
import androidx.compose.ui.unit.dp
import com.example.atividade1.ui.theme.Atividade1Theme


class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        enableEdgeToEdge()
        setContent {
            Atividade1Theme {
                MyApp()

            }
        }
    }
}

@Composable
fun MyApp() {

    Box(
        modifier = Modifier
            .fillMaxSize(),
        contentAlignment = Alignment.Center
    ) {
        Surface(
            modifier = Modifier.fillMaxHeight().fillMaxWidth(),
            color = Color((0xFF0293cf)) //Aplicando cor //ARGB
        ){
            Column(
                verticalArrangement = Arrangement.Center,
                horizontalAlignment = Alignment.CenterHorizontally
            ) {
        CreateRectangle()
        CreateRectangle2()

        }
    }
        }
}

@Composable
fun CreateRectangle() {
    Card(
        modifier = Modifier
            .padding(16.dp)
            .width(250.dp) // Largura fixa
            .height(150.dp), // Altura fixa
        shape = RectangleShape, //retangulo
        elevation = CardDefaults.cardElevation(defaultElevation = 8.dp),
    ) {
        Column(
            modifier = Modifier
                .width(220.dp) // Largura fixa
                .height(150.dp), // Altura fixa
            verticalArrangement = Arrangement.Center,
            horizontalAlignment = Alignment.CenterHorizontally
        ) {
            Text(text = "Nome: Kamilly da Silva ")
            Text(text = "Tel: (11) 99999-9999")
            Text(text = "Email: Kamilly@email.com")

        }
    }
}
@Composable
fun CreateRectangle2(){

    Card(
        modifier = Modifier
            .padding(16.dp)
            .width(250.dp) // Largura fixa
            .height(150.dp), // Altura fixa
        shape = RectangleShape,
        elevation = CardDefaults.cardElevation(defaultElevation = 8.dp)
    ) {
        Column(
            modifier = Modifier
                .fillMaxSize()
                .padding(16.dp),
            verticalArrangement = Arrangement.Center,
            horizontalAlignment = Alignment.CenterHorizontally
        ) {
            Text(text = "Nome: Arthur Ernane ")
            Text(text = "Tel: (11) 99999-9999")
            Text(text = "Email: Ernane@email.com")
        }
    }
}
