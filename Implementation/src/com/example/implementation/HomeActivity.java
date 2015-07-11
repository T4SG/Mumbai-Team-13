package com.example.implementation;

import android.app.Activity;
import android.content.Context;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.widget.ArrayAdapter;
import android.widget.ListView;

public class HomeActivity extends Activity {

	ListView listView;
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_home);	
		
		
		listView = (ListView)findViewById(R.id.lstSchools);
		
		String [] school_names = {
			"School 1",
			"School 2",
			"School 3",
			"School 4",
			"School 5",
			"School 6"
		};
		String[] image_links={"","","","","",""};
		String[] locations={"Mumbai","Pune","London","Delhi","Banglore","Hydrabad"};
		int[] budgets={20000,15000,10000,12000,13000,18000};
		int[] spents={20000,15000,10000,12000,13000,18000};
		

        // Define a new Adapter
        // First parameter - Context
        // Second parameter - Layout for the row
        // Third parameter - ID of the TextView to which the data is written
        // Forth - the Array of data
		
		SchoolListAdapter adapter = new SchoolListAdapter(this,school_names,budgets,spents,locations,image_links);
		listView.setAdapter(adapter);
		
	}

	@Override
	public boolean onCreateOptionsMenu(Menu menu) {
		// Inflate the menu; this adds items to the action bar if it is present.
		getMenuInflater().inflate(R.menu.home, menu);
		return true;
	}

	@Override
	public boolean onOptionsItemSelected(MenuItem item) {
		// Handle action bar item clicks here. The action bar will
		// automatically handle clicks on the Home/Up button, so long
		// as you specify a parent activity in AndroidManifest.xml.
		int id = item.getItemId();
		if (id == R.id.action_settings) {
			return true;
		}
		return super.onOptionsItemSelected(item);
	}
}
