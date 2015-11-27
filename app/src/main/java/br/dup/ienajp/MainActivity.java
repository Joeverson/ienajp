package br.dup.ienajp;

import android.app.AlertDialog;
import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
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
        loadEvents();
    }


    //carregando componentes e eventos
    private void loadComponents(){
        this.btn_noticias = (Button) findViewById(R.id.btn_noticias);
        this.btn_podcast= (Button) findViewById(R.id.btn_podcast);
    }

    private void loadEvents(){
        this.btn_noticias.setOnClickListener(new OnclickBotaoListener());
    }



    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.menu_main, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {

        //verificando quais itens foram chamados
        switch(item.getItemId()){
            case R.id.action_notice:
                return true;
            case R.id.action_podecast:
                Intent it = new Intent(this, NoticesActivity.class);
                startActivity(it);
                return true;
        }

        return super.onOptionsItemSelected(item);
    }


    private class OnclickBotaoListener implements View.OnClickListener{
        @Override
        public void onClick(View v) {

        }
    }



}
