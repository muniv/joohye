package project;
import java.io.*;

public class weblog {
	
	public static String[] sorting(String[] save, int[] count,int index){//삽입정렬
		for(int i=1;i<index;i++){
			int standard=count[i];//기준
			String standard_temp=save[i];
			int compare_index=i-1;
			while(compare_index>=0 && standard>count[compare_index]){
				count[compare_index+1]=count[compare_index];
				save[compare_index+1]=save[compare_index];
				compare_index--;
			}
			count[compare_index+1]=standard;
			save[compare_index+1]=standard_temp;
			
		}
		return save;
	}
	///////////////////////////////////////////////////////////////////////////
	public static void main(String[] args){
		String [] save=new String[1000];
		int [] count=new int[1000];
		for(int n=0;n<1000;n++) count[n]=0;//초기화
		int index=0;
		try {
			//File file=new File("C:/Users/Park Joohye/xw101.shop.access.20160524/abc.txt");
			File file=new File("C:/Users/Park Joohye/xw103.txt");
			FileReader fr=null;
			BufferedReader br=null;
		      String read=null;
		      int readnum=0;
		      
		      fr=new FileReader(file);
		      br=new BufferedReader(fr);
		      while (readnum<1000000 &&((read = br.readLine()) != null)) {
		    	  readnum++;
		    	  char[]imsi=read.toCharArray();
		    	  String url="";
		    	  //////////////////////////////////////
		    	  int count_tta=0;
		    	  int i;//int error_flag=0;
		    	  /////////잘못된 거 걸러내기
		    	  for( i=0;i<=read.length()-1;i++){
		    		  if(imsi[i]=='\"') count_tta++;

		    		  if(count_tta==2)break;
		    	  }
		    	  
		    	  //////////////
		    if(imsi[i+2]=='2'){ 
		    	  count_tta=0;
		    	  for( i=0;i<=read.length()-1;i++){
		    		  if(imsi[i]=='\"') count_tta++;

		    		  if(count_tta==3)break;
		    	  }
		    	  /////////////
		    	
		    	  for(int j=i+1;j<=read.length()-1;j++){
		    		  if(imsi[j]=='\"') break;
		    		  url=url+imsi[j];
		    	  }
		    	  char[]imsi2=url.toCharArray();
		    	  for(int k=0;k<=url.length()-1-3;k++){
		    		  if(imsi2[k]=='.'){
		    			  if (imsi2[k+1]=='c' && imsi2[k+2]=='o' && imsi2[k+3]=='m')
		    				  url=url.substring(0,k+3+1);
		    			  if (imsi2[k+1]=='n' && imsi2[k+2]=='e' && imsi2[k+3]=='t')
		    				  url=url.substring(0,k+3+1);
		    			  if (imsi2[k+1]=='o' && imsi2[k+2]=='r' && imsi2[k+3]=='g')
		    				  url=url.substring(0,k+3+1);
		    			  if (imsi2[k+1]=='k' && imsi2[k+2]=='r')
		    				  url=url.substring(0,k+2+1);
		    			  if (imsi2[k+1]=='d' && imsi2[k+2]=='o')
		    				  url=url.substring(0,k+2+1);
		    		  }
		    	  }
		    	
		    	////////////////////////////////////////////////////url완료
		    		  //System.out.print(url);
		    	  	if(!url.equals("-")){
		    		  int flag=0;
		    		  for(int l=0;l<index;l++){
		    			  if(save[l].equals(url))
		    				  {count[l]++;flag=1;}
		    		  }
		    		  if(flag==0){
		    			  	
		    			  save[index]=url;
			    		  count[index]++;
			    		  index++;
		    		  }

		    	  	}
		    }
		    	  //System.out.print("\n");
		    	  /////////////////////////////////////
		      }
		      save=sorting(save,count,index);
    		  //for(int m=0;m<index;m++){
    			  //System.out.println(save[m]+", "+count[m]);
    		 // }
    		  BufferedWriter out=new BufferedWriter(new FileWriter("web2.html"));
    		  out.write("<!DOCTYPE HTML><html><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"><title>Web log </title><style type=\"text/css\">body {font-family: \"맑은 고딕\", \"돋움\";	font-size: 12px;	color: #333;}h1:before {content: url(bul1.gif);}h1:after {content:  url(bul2.gif);}a:link {color: blue;text-decoration: none;}a:hover {color: red;text-decoration: underline;}a:visited {color: green;}a: active {color: cyan;text-decoration: line-through;}table {border-collapse:separate; width:500px;}td { padding:10px;}tr:hover {background-color: #FC6;}</style></head><body><h1>WEB <strong> log</strong> URL </h1><p> Park Joo Hye </p><table border=\"0\">");
    		  int top=1;
    		  for(int m=0;m<index;m++){
    			  if(count[m]>=5){//5개 이상만 출력
    				  	out.write("<tr><td>"+top+"</td><td>"+save[m]+"</td><td>"+count[m]+"</td></tr>");
    			  		top++;
    			  	}
    		  }
    		  out.write("</table></body></html>");
    		  out.close();
    		  if(fr!=null) fr.close();
		      if(br!=null) br.close();
		} catch (FileNotFoundException e) {
			System.out.println("파일이 없어요!");
			//e.printStackTrace();
		} catch (IOException e){
			e.printStackTrace();
		}
	}
}
