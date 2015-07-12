package com.example.implementation;

import android.content.Context;
import android.content.Intent;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.BaseAdapter;
import android.widget.Button;
import android.widget.TextView;

public class SchoolListAdapter extends BaseAdapter{

	Context context;
	String[] names;
	String[] locations;
	int[] budgets;
	int[] spents;
	String[] project_ids;
	
	private static LayoutInflater inflater=null;
	public SchoolListAdapter(HomeActivity mainactivity,String[] project_id,String[] names,int[] budgets,int[] spents,String[] locations){
		this.context = mainactivity.getBaseContext();
		this.names = names;
		this.locations = locations;
		this.budgets = budgets;
		this.spents = spents;
		this.project_ids = project_id;
		inflater = (LayoutInflater) context.getSystemService(Context.LAYOUT_INFLATER_SERVICE);
		
	}
	
	@Override
	public int getCount() {
		// TODO Auto-generated method stub
		return this.names.length;
	}

	@Override
	public Object getItem(int position) {
		// TODO Auto-generated method stub
		return position;
	}

	@Override
	public long getItemId(int position) {
		// TODO Auto-generated method stub
		return position;
	}


	private class Hold{
		TextView txtname;
		TextView txtlocation;
		TextView txtbudget;
		TextView txtSchoolSpent;
		Button btnUpdate;
		Button btnImages;
	}
	
	@Override
	public View getView(final int position, View convertView, ViewGroup parent) {
		// TODO Auto-generated method stub
		
		final View rootView = inflater.inflate(R.layout.school_list_item,null);
		Hold h = new Hold();
		h.txtname = (TextView) rootView.findViewById(R.id.txtSchoolName);
		h.txtlocation = (TextView) rootView.findViewById(R.id.txtLocation);
		h.txtbudget = (TextView) rootView.findViewById(R.id.txtBudget);
		h.txtSchoolSpent = (TextView) rootView.findViewById(R.id.txtSpent);
		h.btnUpdate = (Button)rootView.findViewById(R.id.btnUpdate);
		h.btnImages = (Button)rootView.findViewById(R.id.btnImage);
		
		
		h.txtbudget.setText("budget: "+budgets[position]);
		h.txtname.setText(names[position]);
		h.txtlocation.setText(locations[position]);
		h.txtSchoolSpent.setText("spent: "+spents[position]);
		
		h.btnUpdate.setOnClickListener(new View.OnClickListener() {
			
			@Override
			public void onClick(View arg0) {
				// TODO Auto-generated method stub
				Intent in = new Intent(context, MainActivity.class);
				in.putExtra("project_id", project_ids[position]);
				context.startActivity(in);
			}
		});
		
		h.btnImages.setOnClickListener(new View.OnClickListener() {
			
			@Override
			public void onClick(View v) {
				// TODO Auto-generated method stub
				Intent intent = new Intent(context, tab2.class);
				context.startActivity(intent);
			}
		});
		
		return rootView;
	}
	
}
