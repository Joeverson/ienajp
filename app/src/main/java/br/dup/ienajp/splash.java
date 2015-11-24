package br.dup.ienajp;

import android.content.Intent;
import android.os.Handler;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;


public class splash extends AppCompatActivity implements Runnable {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_splash);

        //cria o manipulador para poder esperar 3 seg
        Handler hd = new Handler();
        hd.postDelayed(this, 3000);
    }

    //depois da chamada da handler ele execulta essa thread e chama a outra activity e fecha essa tela.
    public void run(){
        startActivity(new Intent(this, MainActivity.class));
        finish();
    }
}
