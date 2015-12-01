package br.dup.ienajp;

import android.content.Intent;
import android.os.Bundle;
import android.support.design.widget.FloatingActionButton;
import android.support.design.widget.Snackbar;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.Toolbar;
import android.util.Log;
import android.view.Menu;
import android.view.MenuItem;
import android.view.MotionEvent;
import android.view.View;
import android.widget.Adapter;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.ListView;
import android.widget.Toast;

import java.util.ArrayList;

public class NoticesActivity extends AppCompatActivity {

    private FloatingActionButton fab;
    private ListView listNotices;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_notices);
        //Toolbar toolbar = (Toolbar) findViewById(R.id.toolbar);
        //setSupportActionBar(toolbar);

        //loads
        this.loadComponents();
        this.loadEvents();
        this.fullList();
    }



    //carregando componentes e eventos

    private void loadComponents(){
        this.fab = (FloatingActionButton) findViewById(R.id.fab);
        this.listNotices = (ListView) findViewById(R.id.listNotices);
    }

    private void loadEvents(){
        this.fab.setOnClickListener(new OnclickBotao());
        this.listNotices.setOnItemClickListener(new OnclickListNotices());
        this.listNotices.setOnItemLongClickListener(new OnClickListLongNotices());
    }




    private void fullList(){
        ///depois tirar da qui...
        String[] names = {"name","name1","name2","name3","name4"};
        ArrayAdapter<String> adapter = new ArrayAdapter<String>(this, android.R.layout.simple_expandable_list_item_1, names);
        this.listNotices.setAdapter(adapter);
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
                return true;
        }

        return super.onOptionsItemSelected(item);
    }






    @Override
    public boolean onTouchEvent(MotionEvent event) {
        if(event.getAction() == MotionEvent.ACTION_DOWN)
            finish();

        return super.onTouchEvent(event);
    }





    //eventos -- listeners

    private class OnclickBotao implements View.OnClickListener{
        @Override
        public void onClick(View v) {
            Snackbar.make(v, "Ultima musica", Snackbar.LENGTH_INDEFINITE)
                    .setAction("Ouvir", this).show();
        }
    }

    private class OnclickListNotices implements AdapterView.OnItemClickListener {
        @Override
        public void onItemClick(AdapterView<?> parent, View view, int position, long id) {
            Log.w("APP", "item clicado "+NoticesActivity.this.listNotices.getAdapter().getItem(position).toString());
        }
    }

    private class OnClickListLongNotices implements AdapterView.OnItemLongClickListener{
        @Override
        public boolean onItemLongClick(AdapterView<?> parent, View view, int position, long id) {

            Log.w("APP", "item clicado longo "+NoticesActivity.this.listNotices.getAdapter().getItem(position).toString());

            return true;
        }
    }

}
