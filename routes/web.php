<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {


////        $json = '{"12":"Agricultural consultant","25":"Armed forces officer","126":"Field trials officer","339":"Volunteer work organiser","397":"Project Management Specialists and Business Operations Specialists","710":"Fish and Game Wardens","858":"Fallers","867":"Carpet Installers","901":"Fence Erectors","906":"Miscellaneous Construction and Related Workers","1006":"Layout Workers","1013":"Laundry and DryCleaning Workers","1044":"Crushing","1180":"Bank Employee","1195":"Senior Consultant","1197":"Co-Founder","1208":"Co-Owner","1211":"Self Employed","1297":"Journeyperson","1311":"Keyholder","1405":"Retired","1415":"Postdoctoral Researcher","1416":"Research And Development Specialist","1443":"Undergraduate Student","1634":"Campus Ambassador","1635":"Americorps Member","1636":"Americorps Vista","1637":"Admissions Ambassador","1828":"Freelance Blogger","1875":"Bsc","1879":"Bsc Engineer","1899":"Business Partner","1967":"Consul General","2024":"Computer Numerical Control Programmer","2033":"Commercial Specialist","2212":"Mayor","2271":"Access Engineer","2711":"Scientific Advisor","3741":"Battalion Executive Officer","3932":"Body Piercer","4216":"Law Student","4218":"Researcher PHD Student","4424":"Catalog Analyst","4426":"Global Category Manager","4433":"Director Category Management","4825":"Petty Officer Third Class","4826":"Petty Officer First Class","4827":"Private First Class","4830":"Mate Second Class","4901":"Student Clinician","5035":"Engineering Student","5125":"Commission Manager","6104":"Delivery Consultant","6105":"Vice President Delivery","6106":"Service Delivery Director","6107":"Delivery Coordinator","6108":"Delivery Director","7996":"Fragrance Consultant","8185":"3D Generalist","8299":"Director Of Individual Giving","8300":"Individual Giving Manager","8301":"Associate Director Major Gifts","8314":"Global Sourcing Specialist","8319":"Director Global Services","8323":"Global Lead","8360":"Area Governor","8380":"Lieutenant Junior Grade","8392":"Director Of Grants","8419":"Grassroots Coordinator","8475":"Guest Speaker","8478":"Guest Service Officer","8479":"Guest Service Team Lead","8481":"Director Of Guest Services","8524":"Graduate Hall Director","8987":"Infantry","8988":"Infantry Soldier","8990":"Infantry Officer","8991":"Infantry Team Leader","8995":"Influencer","9244":"Senior Integration Engineer","9254":"Lead Program Integrator","9293":"Intensive Case Manager","9300":"Senior Interaction Designer","9303":"Senior Interactive Designer","9307":"Vice President Interactive","9309":"Head Of Interactive","9312":"Interaction Design Intern","9315":"Lead Interaction Designer","9667":"Kindle Specialist","9753":"Laundry Manager","9756":"Laundry Attendant","9835":"Senior Learning Specialist","10019":"Second Lieutenant","10051":"Limited Partner","10212":"Loyalty Manager","10213":"Customer Loyalty Manager","10487":"Mentor","10563":"Member Of Technical Staff","10566":"Senior Member Of Technical Staff","10580":"Membership Officer","10602":"Youth Mentor","10603":"Startup Mentor","10604":"Academic Mentor","10607":"MEP Superintendent","10611":"MEP Coordinator","10620":"Merchant Services","10639":"Reset Merchandiser","10642":"Visual Merchandising Intern","10654":"Vice President Mergers Acquisition","10681":"Master Metal Worker","10721":"Middle School Principal","10722":"Middle Office Analyst","10735":"Midfielder","10736":"Midwife Manager","10753":"Military Advisor","10814":"Head Of Mobile","10816":"Mobility Consultant","10820":"Global Mobility Associate","10873":"Mountaineer","10919":"Mystery Shopper","10926":"National Account Director","10934":"Nephrologist","10943":"Natural Language Processing Engineer","10946":"Nurse Navigator","11032":"Nightclub Owner","11033":"Non Executive Director","11093":"Board Observer","11114":"Senior Officer","11153":"Oncology Resident","11171":"Onsite Consultant","11173":"Onsite Engineer","11174":"Onsite Technician","11176":"Website Owner","11177":"Business Process Owner","11183":"Padi Open Water Scuba Instructor","11184":"ROV Tooling Technician","11185":"ROV Tooling Supervisor","11186":"ROV Supervisor","11187":"ROV Pilot","11193":"Operating Partner","11195":"Operating Principal","11243":"Optimization Engineer","11261":"Senior Optimization Engineer","11337":"Director Origination","11338":"Orientation Advisor","11352":"Orthopaedic Traumatologist","11356":"Osteopathic Physician","11358":"Otorhinolaryngology Resident","11359":"Otorhinolaryngologist","11379":"Outdoor Pursuits Instructor","11406":"Principal Owner","11408":"Small Business Owner","11409":"Shop Owner","11410":"Salon Owner","11411":"Assistant to Owner","11412":"System Owner","11413":"Owner Associate","11419":"Partnerships Specialist","11460":"Panelist","11461":"Panel Manager","11466":"Associate Partner","11468":"Director Of Partnerships","11480":"Senior Parachute Rigger","11481":"Master Parachute Rigger","11490":"Parenting Expert","11491":"Perfumer","11505":"Strategic Partnerships","11508":"General Partner","11509":"Executive Partner","11510":"Principal Partner","11511":"Strategic Partner","11512":"Head Of Partnerships","11513":"Partnerships Coordinator","11518":"Vice President Strategic Partnerships","11525":"Strategic Partnerships Specialist","11532":"Parttime Associate","11533":"Parttime Instructor","11534":"Parttime Assistant","11540":"Parttime Supervisor","11541":"Parttime Administrative Assistant","11547":"Parttime Consultant","11606":"Platoon Sergeant","11666":"Pedagogue","11674":"Peer Lead","11708":"Perfusionist","11716":"Perinatal Care Technician","11721":"Permanent Consultant","11727":"Personal Shopper","11808":"Phd Researcher Assistant","11811":"Professor Phd","11812":"Lecturer Phd","11824":"Philanthropist","11825":"Philanthropy Officer","11925":"Pitching Instructor","11930":"Platform Specialist","12077":"Registered Polysomnographic Technologist","12079":"Polysomnographer","12081":"Pool Construction Specialist","12092":"Senior Portfolio Analyst","12140":"Private Practice","12150":"Practice Principal","12173":"Premier Field Engineer","12178":"Senior Premier Field Engineer","12192":"Senior Presales","12193":"Technical Presales","12210":"Preschool Owner","12216":"Presidential Management Fellow","12423":"Structured Products Specialist","12427":"Structured Products Sales","12551":"Senior Proposal Engineer","12557":"Proposal Consultant","12562":"Pharmacy Owner","12601":"Provost","12606":"Provisioner","12608":"Provisioning Engineer","12611":"Director Provincial","12612":"Provider Integration Specialist","12650":"Psychology Student","12665":"Public Sector","12705":"Publishing Consultant","12706":"Web Publisher","12708":"Senior Publisher","12710":"Head Of Publishing","12711":"Co Publisher","12712":"Group Publisher","12713":"Assistant To The Publisher","12714":"Vice President Publishing","12841":"Virtual Reality Specialist","12845":"Virtual Reality Consultant","12852":"Realtime Analyst","12857":"Reservist","12879":"Accounts Receivable Team Lead","13136":"Senior Remedy Consultant","13313":"Semi Retired","13337":"Freelance Retoucher","13407":"Roaming Manager","13408":"Roaming Coordinator","13409":"International Roaming Coordinator","13473":"SAP Lead","13517":"Lead Scheduler","13557":"Scientific Affairs Manager","13615":"Second Vice President","13618":"Second Secretary","13619":"Second Line Support Engineer","13703":"Lead Server","13780":"Showroom Assistant","13867":"Snowboard Instructor","13868":"Snowsports Instructor","13896":"Softlines Manager","13903":"Head Of Solutions","13907":"Solaris Administrator","13908":"Solaris System Administrator","13920":"Senior Solutions Manager","14023":"Spring Intern","14075":"Startup Engineer","14076":"Start-up Owner","14153":"Senior Store Manager","14212":"Stream Lead","14214":"Senior Stress Engineer","14242":"Work Student","14245":"Summer Student","14263":"Studio Owner","14265":"Project Student","14287":"Substitute","14297":"Subdirector General","14299":"Senior Subeditor","14311":"Customer Success Analyst","14333":"Summer Consultant","14348":"Supermarket Owner","14395":"Surfer","14489":"Tai Chi Instructor","14724":"Titular","14737":"Master Tiler","14919":"Transfer Pricing Associate","15028":"Trust Associate","15173":"Vacation Student"}';
////
////        $json = '{"35":"Biomedical scientist","101":"Diplomatic service","232":"Operational researcher","261":"Product development scientist","263":"Programme researcher","281":"Research scientist","1015":"Sewing Machine Operators","1020":"Textile Bleaching and Dyeing Machine Operators and Tenders","1022":"Textile Knitting and Weaving Machine Setters","1023":"Textile Winding","1210":"Engineer","1212":"Project Engineer","1243":"Graduate Student","1282":"Engineer Intern","1290":"Research Intern","1448":"Volunteer","2196":"Professional Driver","3121":"Applied Scientist","3125":"Engineering Apprentice","3227":"Army Officer","3230":"Master-at-Arms","3231":"Army Instructor","4555":"Change Management Manager","4579":"Change Management Coordinator","5078":"Military Officer","5114":"Commissioned Officer","5902":"Film Critic","5905":"Art Critic","5906":"Music Critic","6652":"Road Driver","9384":"Intern Assistant","10284":"Major","10289":"Sergeant Major","10688":"Military","10745":"Military Analyst","11165":"Online Intern","11446":"Paid Intern","12388":"Production Intern","12467":"Programming Intern","12734":"Purchasing Intern","13495":"Senior Scientist","13496":"Scientific Staff","13529":"Scientific Officer","13543":"Visiting Scientist","13547":"Scientific Associate","13550":"Senior Scientific Officer","13555":"Director Scientific Affairs","15193":"Validation Scientist","15217":"Performance Venue Owner","15236":"Veterinary Practice Owner","15237":"Veterinary Medicine Student","15256":"Vineyard Owner","15257":"Vineyard Manager","15275":"Visiting Student","15280":"Visiting Research Scientist","15281":"Vista Volunteer","15293":"Director Of Volunteers","15295":"Volunteer Research Assistant","15315":"Education Volunteer","15317":"International Volunteer","15318":"Marketing Volunteer","15319":"Development Volunteer","15320":"Public Relations Volunteer","15324":"Warranty Specialist","15327":"Warranty Administrator","15330":"Warrant Officer","15333":"Warranty Manager","15345":"Electronic Warfare Technician","15346":"Electronic Warfare Officer","15347":"Chief Warrant Officer","15348":"Warranty Coordinator","15349":"Warranty Analyst","15350":"Warranty Engineer","15354":"Car Wash Owner","15383":"Global Wealth Management Intern","15421":"Health and Wellness Business Owner","15436":"Winter Intern","15460":"Winery Owner","15495":"Working Student","15507":"Workshop Engineer","15549":"Young Researcher"}';
////
////        $items = json_decode($json);
////        $array = [];
////        foreach ($items as $key => $title){
////            $title = str_replace(' ', '%20', $title);
//            $host = "https://www.resume-now.com/eb/api/v1/content/texttunercontent?user_uid=05ad01ef-6afc-439b-8609-e96c345af291&sectionTypeCD=EXPR&productCD=RSM&Jobtitle={$title}&searchItemType=jobTitle&documentID=606b3b5c-ba67-4c1b-8692-413f21ccd710&cultureCD=en-US&enableFuzzySearch=true&includeKGSkills=false&fuzzySearchVariation=fuzzy&contentMatchVariance=rankWithSynonymGroup&includeUSContentInFallback=false&curatedSkillVariance=baseline&includeSynonymInIntlFallback=false";
//            $curl = curl_init();
//            curl_setopt($curl, CURLOPT_URL, $host);
//            curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)");
//            curl_setopt ($curl, CURLOPT_RETURNTRANSFER, 1) ;
//            curl_exec($curl);
////            $ftp_result=curl_exec($curl);
////            $array[$key] = $ftp_result;
////
////            sleep(rand(1,3));
////        }
////
////        Log::info(json_encode($array));
////
////        dd($array);
    //https://www.resume-now.com/eb/api/v1/content/texttunercontent?user_uid=05ad01ef-6afc-439b-8609-e96c345af291&sectionTypeCD=EXPR&productCD=RSM&Jobtitle=Agricultural%20consultant&searchItemType=jobTitle&documentID=606b3b5c-ba67-4c1b-8692-413f21ccd710&cultureCD=en-US&enableFuzzySearch=true&includeKGSkills=false&fuzzySearchVariation=fuzzy&contentMatchVariance=rankWithSynonymGroup&includeUSContentInFallback=false&curatedSkillVariance=baseline&includeSynonymInIntlFallback=false
//    return view('welcome');
});
