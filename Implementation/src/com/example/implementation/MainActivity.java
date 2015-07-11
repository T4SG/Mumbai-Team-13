package com.example.implementation;

import android.app.Activity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

public class MainActivity extends Activity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.login);

    TextView txtUsername = (TextView)findViewById(R.id.txtUsername);
    TextView txtPassword = (TextView)findViewById(R.id.txtPassword);
    
    Button btnSignIn = (Button)findViewById(R.id.btnSign);
    
    btnSignIn.setOnClickListener(new View.OnClickListener() {
		
		@Override
		public void onClick(View v) {
			// TODO Auto-generated method stub
			
		}
	});
        
    }
}
