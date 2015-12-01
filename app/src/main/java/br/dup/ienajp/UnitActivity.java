package br.dup.ienajp;

import android.content.Intent;
import android.os.Bundle;
import android.app.Activity;
import android.support.design.widget.FloatingActionButton;
import android.support.design.widget.Snackbar;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.Toolbar;
import android.view.Menu;
import android.view.MenuItem;
import android.view.MotionEvent;
import android.view.View;

public class UnitActivity extends AppCompatActivity {

    private FloatingActionButton fab;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_unit);
        //Toolbar toolbar = (Toolbar) findViewById(R.id.toolbar);
        //setSupportActionBar(toolbar);

        //loads
        this.loadComponents();
        this.loadEvents();
    }

    //carregando componentes e eventos
    private void loadComponents(){
        this.fab = (FloatingActionButton) findViewById(R.id.fab);
    }

    private void loadEvents(){
        this.fab.setOnClickListener(new OnclickBotao());
    }

    private class OnclickBotao implements View.OnClickListener{
        @Override
        public void onClick(View v) {
            Snackbar.make(v, "Ultima musica", Snackbar.LENGTH_INDEFINITE)
                    .setAction("Ouvir", this).show();
        }
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.menu_main, menu);
        return true;
    }

    /**
     * aqui sào as opcoes do menu la de cima
     * **/
    @Override
    public boolean onOptionsItemSelected(MenuItem item) {

        //verificando quais itens foram chamados
        switch(item.getItemId()){
            case R.id.action_notice:
                startActivity(new Intent(this, NoticesActivity.class));
                return true;
            case R.id.action_podecast:
                return true;
        }

        return super.onOptionsItemSelected(item);
    }



    //eventos de toques na tela
    @Override
    public boolean onTouchEvent(MotionEvent event) {
        if(event.getAction() == MotionEvent.ACTION_DOWN)
            finish();

        return super.onTouchEvent(event);
    }

}
