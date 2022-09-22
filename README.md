# api
1. Cau hinh build.gradle
  //Cau hinh
    implementation 'com.squareup.retrofit2:retrofit:2.1.0'
    implementation 'com.squareup.retrofit2:converter-gson:2.1.0'

Bam sync
2. Cau hinh trong AndroidManifest.xml
<uses-permission android:name="android.permission.INTERNET" />
<uses-permission android:name="android.permission.ACCESS_NETWORK_STATE" />


android:usesCleartextTraffic="true"

3. Tao package remote. Trong package remote tao 2 class
RetrofitController
WebService

4. Tao package entity
Tao class:
Category
Product

5. Cau hinh trong Constant.class
public static final String BASE_URL = "http://192.168.43.218:81/api/"; //api may hien tai

5. Su dung trong Presenter
