# Html-Css-Php-Javascript-MySql dilleri ve bootstrap , sweetalert teknolojilerini kullanarak bir kütüphane sistemi yaptım.
Mysql de kütüphane adında bir database oluşturup gönderdiğim sql dosyası içeri aktarılmalıdır.
Proje başlangıcı login.php sayfasıdır.

Mysql ' de ;  User , kitaplar ve kitap türlerinin bulunduğu 3 adet tablo oluşturdum. Kitaplar ve Kitap türleri tabloları birbiri ile ilişkilendirdim. Böylece bir kitap hangi türe ait Tür ID sütunu ile kolaylıkla görebiliyoruz. 

Sisteme login.php sayfası ile başlıyoruz. Eğer üyeysek kullanıcı adı ve şifre ile giriş yapabiliriz. Fakat üye değilsek de kayıt olabiliriz. Kayıt olurken en az 8 karakter bir küçük ve bir büyük harf  kullanmayı unutmayınız aksi takdirde kaydınız oluşmaz.
Sisteme girmek için ; kullanıcı adı : merveisbilir şifre :Merve1234 bilgileri ile direkt girebilirsiniz. Ya da kendi kaydınızı oluşturabilirsiniz.

Kitaplar sayfasında kitapların listesi bulunur. Aynı zamanda bu sayfa da silme ve güncelleme işlemi gerçekleştirebilirsiniz.
Ek olarak sisteme yeni bir kitap eklenmesi istendiğinde NavBardan kitapEkleme sayfasına gidilir ve oradan gerekli bilgiler doldurularak kitap listeye eklenir.

Kitap Türleri sayfasında ise kitap türlerinin listesi bulunur.Ekstra bir kitap türü eklenmek isterse NavBardan türEkleme sayfasına gidilir ve oradan gerekli bilgiler doldurularak yeni kitap türü listeye eklenir.


KOD :
Include adında bir dosya oluşturdum ve sık kullanılan : menu,css,script,database bağlanma sayfalarını kolayca çağırdım.
Tüm işlemleri islem.php sayfasında switch case yapısı ile backend kısmını yaptım.
Diğer sayfalar da front-end kısmını yaptım.
