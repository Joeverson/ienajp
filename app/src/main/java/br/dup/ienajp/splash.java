package br.dup.ienajp;

import android.content.Intent;
import android.os.Handler;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;

import java.io.BufferedInputStream;
import java.io.IOException;
import java.io.InputStream;
import java.net.HttpURLConnection;
import java.net.URL;

import services.ClientNews;


public class splash extends AppCompatActivity implements Runnable {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_splash);


        /**
         * aqui è criado uma task que vai fazer a chamada http para um site e
         * me retornar um json.
         * **/
        try{
            String get = new ClientNews().execute("http://www.google.com").get();
            //Log.w("APP", get);
        }catch(Exception e){
            Log.e("APP", "error splash -->> "+e.getMessage());
        }



        //cria o manipulador para poder esperar 3 seg
        Handler hd = new Handler();
        hd.postDelayed(this, 1000);
    }

    //depois da chamada da handler ele execulta essa thread e chama a outra activity e fecha essa tela.
    public void run(){
        startActivity(new Intent(this, UnitActivity.class));
        finish();
    }
}
