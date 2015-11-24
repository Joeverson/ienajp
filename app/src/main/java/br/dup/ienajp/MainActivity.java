package br.dup.ienajp;

import android.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class MainActivity extends AppCompatActivity {

    private Button btn_noticias;
    private Button btn_podcast;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        loadComponents();
    }

    private void loadComponents(){
        this.btn_noticias = (Button) findViewById(R.id.btn_noticias);
        this.btn_podcast= (Button) findViewById(R.id.btn_podcast);
    }

    private void loadEvents(){
        this.btn_noticias.setOnClickListener(new OnClickBtnNoticias());
    }



    //chamada dos botões
    private class OnClickBtnNoticias implements View.OnClickListener{

        @Override
        public void onClick(View v) {

        }
    }

}
