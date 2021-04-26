<?php
$conn=mysqli_connect('localhost','root','','intern');
if(isset($_GET['id'])>0)
{
$id=$_GET['id'];
$row=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from form where id='$id'"));
//pr($row);
$n=$row['name'];
$e=$row['email'];
$m=$row['mob'];
$s=$row['state'];
$c=$row['city'];
$add=$row['address'];
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Form </title>
        <!-- Font Icon -->
        <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
        <!-- Main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
    <body>
        <div class="main">
            <!-- Sign up form -->
            <section class="signup" data-aos="flip-up">
                <div class="container">
                    <div class="signup-content">
                        <div class="signup-form">
                            <h2 class="form-title">Fill The Details</h2>
                            <form  method="POST" class="register-form" id="register-form">
                                <div class="form-group">
                                    <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                    <input type="text" name="name" id="name" value="<?php echo $n ?>"/>
                                </div>
                                <div class="form-group">
                                    <label for="email"><i class="zmdi zmdi-email"></i></label>
                                    <input type="email" name="email" id="email" value="<?php echo $e ?>"/>
                                </div>
                                <div class="form-group">
                                    <label for="number"><i class="zmdi zmdi-account-box-phone"></i></label>
                                    <input type="number" name="num" id="email" value="<?php echo $m ?>">
                                </div>
                                <div class="form-group">
                                    <label for="email"><i class="zmdi zmdi-pin"></i></label>
                                    <select id="countrySelect" name="state" size="1" onchange="makeSubmenu(this.value)" value="<?php echo $s ?>">
                                        <option  disabled selected>Choose State</option>
                                        <option value="Andhra Pradesh"
                                            <?php
                                            if($s=='Andhra Pradesh')
                                            echo "selected";
                                            ?>
                                        >Andhra Pradesh</option>
                                        <option value="Andaman and Nicobar Islands"
                                            
                                            <?php
                                            if($s=='Andaman and Nicobar Islands')
                                            echo "selected";
                                            ?>
                                        >Andaman and Nicobar Islands</option>
                                        <option value="Arunachal Pradesh"
                                            
                                            <?php
                                            if($s=='Arunachal Pradesh')
                                            echo "selected";
                                            ?>
                                        >Arunachal Pradesh</option>
                                        <option value="Assam"
                                            <?php
                                            if($s=='Assam')
                                            echo "selected";
                                            ?>
                                        >Assam</option>
                                        <option value="Bihar"
                                            <?php
                                            if($s=='Bihar')
                                            echo "selected";
                                            ?>
                                        >Bihar</option>
                                        <option value="Chandigarh"
                                            
                                            <?php
                                            if($s=='Chandigarh')
                                            echo "selected";
                                            ?>
                                        >Chandigarh</option>
                                        <option value="Chhattisgarh"
                                            <?php
                                            if($s=='Chhattisgarh')
                                            echo "selected";
                                            ?>
                                        >Chhattisgarh</option>
                                        <option value="Dadar and Nagar Haveli"
                                            <?php
                                            if($s=='Dadar and Nagar Haveli')
                                            echo "selected";
                                            ?>
                                        >Dadar and Nagar Haveli</option>
                                        
                                        <option value="Delhi"
                                            <?php
                                            if($s=='Delhi')
                                            echo "selected";
                                            ?>
                                        >Delhi</option>
                                        
                                        <option value="Puducherry"
                                            <?php
                                            if($s=='Puducherry')
                                            echo "selected";
                                            ?>
                                        >Puducherry</option>
                                        <option value="Goa"
                                            <?php
                                            if($s=='Goa')
                                            echo "selected";
                                            ?>
                                        >Goa</option>
                                        <option value="Gujarat"
                                            <?php
                                            if($s=='Gujarat')
                                            echo "selected";
                                            ?>
                                        >Gujarat</option>
                                        <option value="Haryana"
                                            <?php
                                            if($s=='Haryana')
                                            echo "selected";
                                            ?>
                                        >Haryana</option>
                                        <option value="Himachal Pradesh"
                                            <?php
                                            if($s=='Himachal Pradesh')
                                            echo "selected";
                                            ?>
                                        >Himachal Pradesh</option>
                                        <option value="Jammu and Kashmir"
                                            <?php
                                            if($s=='Jammu and Kashmir')
                                            echo "selected";
                                            ?>
                                        >Jammu and Kashmir</option>
                                        <option value="Jharkhand"
                                            <?php
                                            if($s=='Jharkhand')
                                            echo "selected";
                                            ?>
                                        >Jharkhand</option>
                                        <option value="Karnataka"
                                            <?php
                                            if($s=='Karnataka')
                                            echo "selected";
                                            ?>
                                        >Karnataka</option>
                                        <option value="Kerala"
                                            <?php
                                            if($s=='Kerala')
                                            echo "selected";
                                            ?>
                                        >Kerala</option>
                                        <option value="Madhya Pradesh"
                                            <?php
                                            if($s=='Madhya Pradesh')
                                            echo "selected";
                                            ?>
                                        >Madhya Pradesh</option>
                                        <option value="Maharashtra"
                                            <?php
                                            if($s=='Maharashtra')
                                            echo "selected";
                                            ?>
                                        >Maharashtra</option>
                                        <option value="Manipur"
                                            <?php
                                            if($s=='Manipur')
                                            echo "selected";
                                            ?>
                                        >Manipur</option>
                                        <option value="Meghalaya"
                                            <?php
                                            if($s=='Meghalaya')
                                            echo "selected";
                                            ?>
                                        >Meghalaya</option>
                                        <option value="Mizoram"
                                            <?php
                                            if($s=='Mizoram')
                                            echo "selected";
                                            ?>
                                        >Mizoram</option>
                                        <option value="Nagaland"
                                            <?php
                                            if($s=='Nagaland')
                                            echo "selected";
                                            ?>
                                        >Nagaland</option>
                                        <option value="Odisha"
                                            <?php
                                            if($s=='Odisha')
                                            echo "selected";
                                            ?>
                                        >Odisha</option>
                                        <option value="Punjab"
                                            <?php
                                            if($s=='Punjab')
                                            echo "selected";
                                            ?>
                                        >Punjab</option>
                                        <option value="Rajasthan"
                                            <?php
                                            if($s=='Rajasthan')
                                            echo "selected";
                                            ?>
                                        >Rajasthan</option>
                                        
                                        <option value="Tamil Nadu"
                                            <?php
                                            if($s=='Tamil Nadu')
                                            echo "selected";
                                            ?>
                                        >Tamil Nadu</option>
                                        <option value="Telangana"
                                            <?php
                                            if($s=='Telangana')
                                            echo "selected";
                                            ?>
                                        >Telangana</option>
                                        <option value="Tripura"
                                            <?php
                                            if($s=='Tripura')
                                            echo "selected";
                                            ?>
                                        >Tripura</option>
                                        <option value="Uttar Pradesh"
                                            <?php
                                            if($s=='Uttar Pradesh')
                                            echo "selected";
                                            ?>
                                        >Uttar Pradesh</option>
                                        <option value="Uttarakhand"
                                            <?php
                                            if($s=='Uttarakhand')
                                            echo "selected";
                                            ?>
                                        >Uttarakhand</option>
                                        <option value="West Bengal"
                                            <?php
                                            if($s=='West Bengal')
                                            echo "selected";
                                            ?>
                                        >West Bengal</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="email"><i class="zmdi zmdi-pin"></i></label>
                                    <select  id="citySelect" size="1" name="city" required>
                                        <option value="" disabled selected>Choose City</option>
                                        
                                        
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="re-pass"><i class="zmdi zmdi-home"></i></label>
                                    <textarea name="address"  id="pass"/><?php echo $add ?></textarea>
                                </div>
                                
                                
                                <div class="form-group form-button">
                                    <input type="submit" name="Update" id="signup" class="form-submit" value="Update"/>
                                    
                                </div>
                            </form>
                        </div>
                        <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        
                    </div>
                </div>
            </div>
        </section>
        
    </div>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
    var citiesByState = {
    Odisha: ["Bhubaneswar","Puri","Cuttack"],
    Maharashtra: ["Mumbai","Pune","Nagpur"],
    Kerala: ["kochi","Kanpur"],
    'Andaman and Nicobar Islands': ["PortBlair"],
    'Andhra Pradesh':["Adoni","Amalapuram","Anakapalle","Anantapur","Bapatla","Bheemunipatnam","Bhimavaram","Bobbili","Chilakaluripet","Chirala","Chittoor","Dharmavaram","Eluru","Gooty","Gudivada","Gudur","Guntakal","Guntur","Hindupur","Jaggaiahpet","Jammalamadugu","Kadapa","Kadiri","Kakinada","Kandukur","Kavali","Kovvur","Kurnool","Macherla","Machilipatnam","Madanapalle","Mandapeta","Markapur","Nagari","Naidupet","Nandyal","Narasapuram","Narasaraopet","Narsipatnam","Nellore","Nidadavole","Nuzvid","Ongole","Palacole","Palasa Kasibugga","Parvathipuram","Pedana","Peddapuram","Pithapuram","Ponnur","Proddatur","Punganur","Puttur","Rajahmundry","Rajam","Rajampet","Ramachandrapuram","Rayachoti","Rayadurg","Renigunta","Repalle","Salur","Samalkot","Sattenapalle","Srikakulam","Srikalahasti","Srisailam Project (Right Flank Colony) Township","Sullurpeta","Tadepalligudem","Tadpatri","Tanuku","Tenali","Tirupati","Tiruvuru","Tuni","Uravakonda","Venkatagiri","Vijayawada","Vinukonda","Visakhapatnam","Vizianagaram","Yemmiganur","Yerraguntla"],
    'Arunachal Pradesh':["Naharlagun","Pasighat"],
    'Dadar and Nagar Haveli':["Silvassa"],
    Assam:["Barpeta","Bongaigaon City","Dhubri","Dibrugarh","Diphu","Goalpara","Guwahati","Jorhat","Karimganj","Lanka","Lumding","Mangaldoi","Mankachar","Margherita","Mariani","Marigaon","Nagaon","Nalbari","North Lakhimpur","Rangia","Sibsagar","Silapathar","Silchar","Tezpur","Tinsukia"],
    Bihar:["Araria","Arrah","Arwal","Asarganj","Aurangabad","Bagaha","Barh","Begusarai","Bettiah","Bhabua","Bhagalpur","Buxar","Chhapra","Darbhanga","Dehri-on-Sone","Dumraon","Forbesganj","Gaya","Gopalganj","Hajipur","Jamalpur","Jamui","Jehanabad","Katihar","Kishanganj","Lakhisarai","Lalganj","Madhepura","Madhubani","Maharajganj","Mahnar Bazar","Makhdumpur","Maner","Manihari","Marhaura","Masaurhi","Mirganj","Mokameh","Motihari","Motipur","Munger","Murliganj","Muzaffarpur","Narkatiaganj","Naugachhia","Nawada","Nokha","Patna*","Piro","Purnia","Rafiganj","Rajgir","Ramnagar","Raxaul Bazar","Revelganj","Rosera","Saharsa","Samastipur","Sasaram","Sheikhpura","Sheohar","Sherghati","Silao","Sitamarhi","Siwan","Sonepur","Sugauli","Sultanganj","Supaul","Warisaliganj"],
    Chandigarh:["Chandigarh"],
    Chhattisgarh:["Ambikapur","Bhatapara","Bhilai Nagar","Bilaspur","Chirmiri","Dalli-Rajhara","Dhamtari","Durg","Jagdalpur","Korba","Mahasamund","Manendragarh","Mungeli","Naila Janjgir","Raigarh","Raipur*","Rajnandgaon","Sakti","Tilda Newra"],
    Delhi:["Delhi","New Delhi*"],
    Goa:["Mapusa","Margao","Marmagao","Panaji*"],
    Gujarat:["Adalaj","Ahmedabad","Amreli","Anand","Anjar","Ankleshwar","Bharuch","Bhavnagar","Bhuj","Chhapra","Deesa","Dhoraji","Godhra","Jamnagar","Kadi","Kapadvanj","Keshod","Khambhat","Lathi","Limbdi","Lunawada","Mahesana","Mahuva","Manavadar","Mandvi","Mangrol","Mansa","Mahemdabad","Modasa","Morvi","Nadiad","Navsari","Padra","Palanpur","Palitana","Pardi","Patan","Petlad","Porbandar","Radhanpur","Rajkot","Rajpipla","Rajula","Ranavav","Rapar","Salaya","Sanand","Savarkundla","Sidhpur","Sihor","Songadh","Surat","Talaja","Thangadh","Tharad","Umbergaon","Umreth","Una","Unjha","Upleta","Vadnagar","Vadodara","Valsad","Vapi","Vapi","Veraval","Vijapur","Viramgam","Visnagar","Vyara","Wadhwan","Wankaner"],
    Haryana:["Bahadurgarh","Bhiwani","Charkhi Dadri","Faridabad","Fatehabad","Gohana","Gurgaon","Hansi","Hisar","Jind","Kaithal","Karnal","Ladwa","Mahendragarh","Mandi Dabwali","Narnaul","Narwana","Palwal","Panchkula","Panipat","Pehowa","Pinjore","Rania","Ratia","Rewari","Rohtak","Safidon","Samalkha","Sarsod","Shahbad","Sirsa","Sohna","Sonipat","Taraori","Thanesar","Tohana","Yamunanagar"],
    'Himachal Pradesh':["Mandi","Nahan","Palampur","Shimla*","Solan","Sundarnagar"],
    'Jammu and Kashmir':["Anantnag","Baramula","Jammu","Kathua","Punch","Rajauri","Sopore","Srinagar*","Udhampur"],
    Jharkhand:["Adityapur","Bokaro Steel City","Chaibasa","Chatra","Chirkunda","Medininagar (Daltonganj)","Deoghar","Dhanbad","Dumka","Giridih","Gumia","Hazaribag","Jamshedpur","Jhumri Tilaiya","Lohardaga","Madhupur","Mihijam","Musabani","Pakaur","Patratu","Phusro","Ramgarh","Ranchi*","Sahibganj","Saunda","Simdega","Tenu dam-cum-Kathhara"],
    Karnataka:["Adyar","Afzalpur","Arsikere","Athni","Bengaluru","Belagavi","Ballari","Chikkamagaluru","Davanagere","Gokak","Hubli-Dharwad","Karwar","Kolar","Lakshmeshwar","Lingsugur","Maddur","Madhugiri","Madikeri","Magadi","Mahalingapura","Malavalli","Malur","Mandya","Mangaluru","Manvi","Mudalagi","Mudabidri","Muddebihal","Mudhol","Mulbagal","Mundargi","Nanjangud","Nargund","Navalgund","Nelamangala","Pavagada","Piriyapatna","Puttur","Rabkavi Banhatti","Raayachuru","Ranebennuru","Ramanagaram","Ramdurg","Ranibennur","Robertson Pet","Ron","Sadalagi","Sagara","Sakaleshapura","Sindagi","Sanduru","Sankeshwara","Saundatti-Yellamma","Savanur","Sedam","Shahabad","Shahpur","Shiggaon","Shikaripur","Shivamogga","Surapura","Shrirangapattana","Sidlaghatta","Sindhagi","Sindhnur","Sira","Sirsi","Siruguppa","Srinivaspur","Tarikere","Tekkalakote","Terdal","Talikota","Tiptur","Tumkur","Udupi","Vijayapura","Wadi","Yadgir"],
    Karnatka:["Mysore"],
    Kerala:["Adoor","Alappuzha","Attingal","Chalakudy","Changanassery","Cherthala","Chittur-Thathamangalam","Guruvayoor","Kanhangad","Kannur","Kasaragod","Kayamkulam","Kochi","Kodungallur","Kollam","Kottayam","Kozhikode","Kunnamkulam","Malappuram","Mattannur","Mavelikkara","Mavoor","Muvattupuzha","Nedumangad","Neyyattinkara","Nilambur","Ottappalam","Palai","Palakkad","Panamattom","Panniyannur","Pappinisseri","Paravoor","Pathanamthitta","Peringathur","Perinthalmanna","Perumbavoor","Ponnani","Punalur","Puthuppally","Koyilandy","Shoranur","Taliparamba","Thiruvalla","Thiruvananthapuram","Thodupuzha","Thrissur","Tirur","Vaikom","Varkala","Vatakara"],
    'Madhya Pradesh':["Alirajpur","Ashok Nagar","Balaghat","Bhopal","Ganjbasoda","Gwalior","Indore","Itarsi","Jabalpur","Lahar","Maharajpur","Mahidpur","Maihar","Malaj Khand","Manasa","Manawar","Mandideep","Mandla","Mandsaur","Mauganj","Mhow Cantonment","Mhowgaon","Morena","Multai","Mundi","Murwara (Katni)","Nagda","Nainpur","Narsinghgarh","Narsinghgarh","Neemuch","Nepanagar","Niwari","Nowgong","Nowrozabad (Khodargama)","Pachore","Pali","Panagar","Pandhurna","Panna","Pasan","Pipariya","Pithampur","Porsa","Prithvipur","Raghogarh-Vijaypur","Rahatgarh","Raisen","Rajgarh","Ratlam","Rau","Rehli","Rewa","Sabalgarh","Sagar","Sanawad","Sarangpur","Sarni","Satna","Sausar","Sehore","Sendhwa","Seoni","Seoni-Malwa","Shahdol","Shajapur","Shamgarh","Sheopur","Shivpuri","Shujalpur","Sidhi","Sihora","Singrauli","Sironj","Sohagpur","Tarana","Tikamgarh","Ujjain","Umaria","Vidisha","Vijaypur","Wara Seoni"],
    Maharashtra:["[[]]","Ahmednagar","Akola","Akot","Amalner","Ambejogai","Amravati","Anjangaon","Arvi","Aurangabad","Bhiwandi","Dhule","Kalyan-Dombivali","Ichalkaranji","Kalyan-Dombivali","Karjat","Latur","Loha","Lonar","Lonavla","Mahad","Malegaon","Malkapur","Mangalvedhe","Mangrulpir","Manjlegaon","Manmad","Manwath","Mehkar","Mhaswad","Mira-Bhayandar","Morshi","Mukhed","Mul","Greater Mumbai*","Murtijapur","Nagpur","Nanded-Waghala","Nandgaon","Nandura","Nandurbar","Narkhed","Nashik","Navi Mumbai","Nawapur","Nilanga","Osmanabad","Ozar","Pachora","Paithan","Palghar","Pandharkaoda","Pandharpur","Panvel","Parbhani","Parli","Partur","Pathardi","Pathri","Patur","Pauni","Pen","Phaltan","Pulgaon","Pune","Purna","Pusad","Rahuri","Rajura","Ramtek","Ratnagiri","Raver","Risod","Sailu","Sangamner","Sangli","Sangole","Sasvad","Satana","Satara","Savner","Sawantwadi","Shahade","Shegaon","Shendurjana","Shirdi","Shirpur-Warwade","Shirur","Shrigonda","Shrirampur","Sillod","Sinnar","Solapur","Soyagaon","Talegaon Dabhade","Talode","Tasgaon","Thane","Tirora","Tuljapur","Tumsar","Uchgaon","Udgir","Umarga","Umarkhed","Umred","Uran","Uran Islampur","Vadgaon Kasba","Vaijapur","Vasai-Virar","Vita","Wadgaon Road","Wai","Wani","Wardha","Warora","Warud","Washim","Yavatmal","Yawal","Yevla"],
    Manipur:["Imphal*","Lilong","Mayang Imphal","Thoubal"],
    Meghalaya:["Nongstoin","Shillong*","Tura"],
    Mizoram:["Aizawl","Lunglei","Saiha"],
    Nagaland:["Dimapur","Kohima*","Mokokchung","Tuensang","Wokha","Zunheboto"],
    Odisha:["Balangir","Baleshwar Town","Barbil","Bargarh","Baripada Town","Bhadrak","Bhawanipatna","Bhubaneswar*","Brahmapur","Byasanagar","Cuttack","Dhenkanal","Jatani","Jharsuguda","Kendrapara","Kendujhar","Malkangiri","Nabarangapur","Paradip","Parlakhemundi","Pattamundai","Phulabani","Puri","Rairangpur","Rajagangapur","Raurkela","Rayagada","Sambalpur","Soro","Sunabeda","Sundargarh","Talcher","Tarbha","Titlagarh"],
    Puducherry:["Karaikal","Mahe","Pondicherry*","Yanam"],
    Punjab:["Amritsar","Barnala","Batala","Bathinda","Dhuri","Faridkot","Fazilka","Firozpur","Firozpur Cantt.","Gobindgarh","Gurdaspur","Hoshiarpur","Jagraon","Jalandhar Cantt.","Jalandhar","Kapurthala","Khanna","Kharar","Kot Kapura","Longowal","Ludhiana","Malerkotla","Malout","Mansa","Moga","Mohali","Morinda, India","Mukerian","Muktsar","Nabha","Nakodar","Nangal","Nawanshahr","Pathankot","Patiala","Pattran","Patti","Phagwara","Phillaur","Qadian","Raikot","Rajpura","Rampura Phul","Rupnagar","Samana","Sangrur","Sirhind Fatehgarh Sahib","Sujanpur","Sunam","Talwara","Tarn Taran","Urmar Tanda","Zira","Zirakpur"],
    Rajasthan:["Ajmer","Alwar","Bikaner","Bharatpur","Bhilwara","Jaipur*","Jodhpur","Lachhmangarh","Ladnu","Lakheri","Lalsot","Losal","Makrana","Malpura","Mandalgarh","Mandawa","Mangrol","Merta City","Mount Abu","Nadbai","Nagar","Nagaur","Nasirabad","Nathdwara","Neem-Ka-Thana","Nimbahera","Nohar","Nokha","Pali","Phalodi","Phulera","Pilani","Pilibanga","Pindwara","Pipar City","Prantij","Pratapgarh","Raisinghnagar","Rajakhera","Rajaldesar","Rajgarh (Alwar)","Rajgarh (Churu)","Rajsamand","Ramganj Mandi","Ramngarh","Ratangarh","Rawatbhata","Rawatsar","Reengus","Sadri","Sadulshahar","Sadulpur","Sagwara","Sambhar","Sanchore","Sangaria","Sardarshahar","Sawai Madhopur","Shahpura","Shahpura","Sheoganj","Sikar","Sirohi","Sojat","Sri Madhopur","Sujangarh","Sumerpur","Suratgarh","Taranagar","Todabhim","Todaraisingh","Tonk","Udaipur","Udaipurwati","Vijainagar, Ajmer"],
    'Tamil Nadu':["Arakkonam","Aruppukkottai","Chennai*","Coimbatore","Erode","Gobichettipalayam","Kancheepuram","Karur","Lalgudi","Madurai","Manachanallur","Nagapattinam","Nagercoil","Namagiripettai","Namakkal","Nandivaram-Guduvancheri","Nanjikottai","Natham","Nellikuppam","Neyveli (TS)","O' Valley","Oddanchatram","P.N.Patti","Pacode","Padmanabhapuram","Palani","Palladam","Pallapatti","Pallikonda","Panagudi","Panruti","Paramakudi","Parangipettai","Pattukkottai","Perambalur","Peravurani","Periyakulam","Periyasemur","Pernampattu","Pollachi","Polur","Ponneri","Pudukkottai","Pudupattinam","Puliyankudi","Punjaipugalur","Ranipet","Rajapalayam","Ramanathapuram","Rameshwaram","Rasipuram","Salem","Sankarankoil","Sankari","Sathyamangalam","Sattur","Shenkottai","Sholavandan","Sholingur","Sirkali","Sivaganga","Sivagiri","Sivakasi","Srivilliputhur","Surandai","Suriyampalayam","Tenkasi","Thammampatti","Thanjavur","Tharamangalam","Tharangambadi","Theni Allinagaram","Thirumangalam","Thirupuvanam","Thiruthuraipoondi","Thiruvallur","Thiruvarur","Thuraiyur","Tindivanam","Tiruchendur","Tiruchengode","Tiruchirappalli","Tirukalukundram","Tirukkoyilur","Tirunelveli","Tirupathur","Tirupathur","Tiruppur","Tiruttani","Tiruvannamalai","Tiruvethipuram","Tittakudi","Udhagamandalam","Udumalaipettai","Unnamalaikadai","Usilampatti","Uthamapalayam","Uthiramerur","Vadakkuvalliyur","Vadalur","Vadipatti","Valparai","Vandavasi","Vaniyambadi","Vedaranyam","Vellakoil","Vellore","Vikramasingapuram","Viluppuram","Virudhachalam","Virudhunagar","Viswanatham"],
    Telangana:["Adilabad","Bellampalle","Bhadrachalam","Bhainsa","Bhongir","Bodhan","Farooqnagar","Gadwal","Hyderabad*","Jagtial","Jangaon","Kagaznagar","Kamareddy","Karimnagar","Khammam","Koratla","Kothagudem","Kyathampalle","Mahbubnagar","Mancherial","Mandamarri","Manuguru","Medak","Miryalaguda","Nagarkurnool","Narayanpet","Nirmal","Nizamabad","Palwancha","Ramagundam","Sadasivpet","Sangareddy","Siddipet","Sircilla","Suryapet","Tandur","Vikarabad","Wanaparthy","Warangal","Yellandu"],
    Tripura:["Agartala*","Belonia","Dharmanagar","Kailasahar","Khowai","Pratapgarh","Udaipur"],
    'Uttar Pradesh':["Achhnera","Agra","Aligarh","Allahabad","Amroha","Azamgarh","Bahraich","Chandausi","Etawah","Firozabad","Fatehpur Sikri","Hapur","Hardoi *","Jhansi","Kalpi","Kanpur","Khair","Laharpur","Lakhimpur","Lal Gopalganj Nindaura","Lalitpur","Lalganj","Lar","Loni","Lucknow*","Mathura","Meerut","Modinagar","Moradabad","Nagina","Najibabad","Nakur","Nanpara","Naraura","Naugawan Sadat","Nautanwa","Nawabganj","Nehtaur","Niwai","Noida","Noorpur","Obra","Orai","Padrauna","Palia Kalan","Parasi","Phulpur","Pihani","Pilibhit","Pilkhuwa","Powayan","Pukhrayan","Puranpur","Purquazi","Purwa","Rae Bareli","Rampur","Rampur Maniharan","Rampur Maniharan","Rasra","Rath","Renukoot","Reoti","Robertsganj","Rudauli","Rudrapur","Sadabad","Safipur","Saharanpur","Sahaspur","Sahaswan","Sahawar","Sahjanwa","Saidpur","Sambhal","Samdhan","Samthar","Sandi","Sandila","Sardhana","Seohara","Shahabad, Hardoi","Shahabad, Rampur","Shahganj","Shahjahanpur","Shamli","Shamsabad, Agra","Shamsabad, Farrukhabad","Sherkot","Shikarpur, Bulandshahr","Shikohabad","Shishgarh","Siana","Sikanderpur","Sikandra Rao","Sikandrabad","Sirsaganj","Sirsi","Sitapur","Soron","Suar","Sultanpur","Sumerpur","Tanda","Thakurdwara","Thana Bhawan","Tilhar","Tirwaganj","Tulsipur","Tundla","Ujhani","Unnao","Utraula","Varanasi","Vrindavan","Warhapur","Zaidpur","Zamania"],
    Uttarakhand:["Bageshwar","Dehradun","Haldwani-cum-Kathgodam","Hardwar","Kashipur","Manglaur","Mussoorie","Nagla","Nainital","Pauri","Pithoragarh","Ramnagar","Rishikesh","Roorkee","Rudrapur","Sitarganj","Srinagar","Tehri"],
    'West Bengal':["Adra","Alipurduar","Arambagh","Asansol","Baharampur","Balurghat","Bankura","Darjiling","English Bazar","Gangarampur","Habra","Hugli-Chinsurah","Jalpaiguri","Jhargram","Kalimpong","Kharagpur","Kolkata","Mainaguri","Malda","Mathabhanga","Medinipur","Memari","Monoharpur","Murshidabad","Nabadwip","Naihati","Panchla","Pandua","Paschim Punropara","Purulia","Raghunathpur","Raghunathganj","Raiganj","Rampurhat","Ranaghat","Sainthia","Santipur","Siliguri","Sonamukhi","Srirampore","Suri","Taki","Tamluk","Tarakeswar"]
    }
    function makeSubmenu(value) {
    if(value.length==0) document.getElementById("citySelect").innerHTML = "<option></option>";
    else {
    var citiesOptions = "";
    for(cityId in citiesByState[value]) {
    citiesOptions+="<option>"+citiesByState[value][cityId]+"</option>";
    }
    document.getElementById("citySelect").innerHTML = citiesOptions;
    }
    }
    function displaySelected() { var country = document.getElementById("countrySelect").value;
    var city = document.getElementById("citySelect").value;
    alert(country+"\n"+city);
    }
    function resetSelection() {
    document.getElementById("countrySelect").selectedIndex = 0;
    document.getElementById("citySelect").selectedIndex = 0;
    }
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init({
    duration: 3000,
    once: true,
    });
    </script>
    
    
    <?php
    if(isset($_POST['Update']))
    {
    echo $n=$_POST['name'];
    echo $e=$_POST['email'];
    echo $m=$_POST['num'];
    echo $s=$_POST['state'];
    echo $c=$_POST['city'];
    echo $a=$_POST['address'];
    if(mysqli_query($conn,"UPDATE form set name='$n',email='$e',mob='$m',state='$s',city='$c',address='$a' where id='$id'")){
    echo "<script>swal( 'Data updated','updated!','success' ).then(function() { window. location = 'display.php'; });;</script>";
    }
    // redirect('category.php');
    }
    ?>
</body>
</html>