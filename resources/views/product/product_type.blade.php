<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Hurricane&family=Ibarra+Real+Nova:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="php/css/header.css">
    <link rel="stylesheet" href="php/css/product_type.css">
    <link rel="stylesheet" href="php/css/products.css">
    <title>Header</title>
    <style>
        .page {
            display: none;
        }
        .active {
            display: block;
        }
        .product-info {
            display: none;  
        }
    </style>
</head>
<body>
    
    @include ('header_footer.header')

    <section class="Category">
        <div class="container">
            <div class="product-grid">
                <div class="product-card">
                    <img src="php/img/product/giaolinhnam.jpg" alt="Sản phẩm 1">
                    <h2>Áo giao lĩnh</h2>
                    <p>Áo giao lĩnh là áo có phần cổ giao nhau ở trước ngực, vạt trái đè lên vạt phải, tay áo chủ yếu là loại tay thụng và tay hẹp. Mang đậm âm hưởng văn hóa Đông Á nhưng áo giao lĩnh Việt Nam vẫn có nét riêng là hai vạt váy trong và ngoài không bằng nhau. Vậy nên đây là trang phục mang đậm bản sắc văn hóa Việt.</p>
                    <button onclick="showProductInfo('giaolinh')" class="btn">Xem Chi Tiết</button>
                </div>
                <div class="product-card">
                    <img src="php/img/product/vienlinhnam.jpg" alt="Sản phẩm 2">
                    <h2>Áo viên lĩnh</h2>
                    <p>Áo viên lĩnh còn gọi là áo cổ tròn, cổ kiềng… gài cúc bên vai phải. Dạng áo này tương tự như giao lĩnh, nhưng áo là dạng cổ tròn thay vì cổ giao nhau, cũng có dạng vạt ngắn và vạt dài. Vào thời Lê, Nguyễn áo viên lĩnh là kiểu áo chính thức nhất của tầng lớp quan viên, triều đình và cả vua chúa.</p>
                    <button onclick="showProductInfo('vienlinh')" class="btn">Xem Chi Tiết</button>
                </div>
                <div class="product-card">
                    <img src="php/img/product/doikhamnu.jpg" alt="Sản phẩm 3">
                    <h2>Áo đối khâm</h2>
                    <p>Đối khâm tức vạt áo đối nhau, đối khâm là dạng áo có hai vạt trước đặt song song nhau, thường để buông thõng, khoác bên ngoài, nhìn được rõ lớp áo bên trong. Loại áo này thường xẻ tà 2 bên, độ dài chưa chạm đến chân váy. Từ thời Lý – Trần nước ta đã chuộng lại áo này và sau này còn có thêm nhiều biến thể.</p>
                    <button onclick="showProductInfo('doikham')" class="btn">Xem Chi Tiết</button>
                </div>
                <div class="product-card">
                    <img src="php/img/product/caothuc.jpg" alt="Sản phẩm 4">
                    <h2>Tiện phục, cao thúc</h2>
                    <p>Các hậu phi có tiện phục quen thuộc là phối nội y (áo yếm), choàng thêm áo đối khâm. Khi nội y phụ nữ chỉ là dạng quấn quanh ngực, kết hợp với thường kéo cao và đối khâm, sẽ tạo nên một kiểu trang phục khá giống trang phục của phụ nữ thời Đường. Dạng trang phục này được gọi là “cao thúc”.</p>
                    <a href="product4-details.html" class="btn">Xem Chi Tiết</a>
                </div>
                <div class="product-card">
                    <img src="php/img/product/vankiennu.jpg" alt="Sản phẩm 5">
                    <h2>Vân kiên</h2>
                    <p>Vân kiên là một loại áo choàng, áo cánh dơi. Loại áo choàng cổ này được dùng để tránh bẩn vai áo và trang trí như một phục sức. Vân kiên rất phổ biến trên các tượng thời Lê, tầng lớp quý tộc thời đầu nhà Nguyễn và giới múa hát ca kịch nhà Nguyễn. Vân kiên còn có thể được mặc như điểm nhấn của trang phục hiện đại.</p>
                    <a href="product5-details.html" class="btn">Xem Chi Tiết</a>
                </div>
                <div class="product-card">
                    <img src="php/img/product/aotacnu.jpg" alt="Sản phẩm 6">
                    <h2>Áo tấc, ngũ thân</h2>
                    <p>Áo ngũ thân được chắp từ năm mảnh vải, che từ cổ đến hoặc quá đầu gối, cổ đứng cài cúc bên phải, thường mặc với quần dài. Từ thời Nguyễn, áo ngũ thân có hai loại: áo tấc và ngũ thân tay chẽn. Áo tấc là áo ngũ thân tay thụng. Còn áo ngũ thân tay chẽn có thân áo như áo tấc nhưng được may kiểu ống tay hẹp.</p>
                    <a href="product6-details.html" class="btn">Xem Chi Tiết</a>
                </div>
                <div class="product-card">
                    <img src="php/img/product/nhatbinhhoanghau.jpg" alt="Sản phẩm 7">
                    <h2>Áo nhật bình</h2>
                    <p>Áo Nhật bình là triều phục dành cho bậc hậu, phi, cung tần và công chúa thời Nguyễn, sau này là hỷ phục của phụ nữ quý tộc. Là dạng áo đối khâm khoác bên ngoài áo ngũ thân, cài khuy giữa, nút áo tròn bằng ngọc điêu khắc tinh xảo. Hai vạt buộc dây, phần cổ mặc vào ghép thành hình chữ nhật nên gọi là nhật bình.</p>
                    <a href="product4-details.html" class="btn">Xem Chi Tiết</a>
                </div>
                <div class="product-card">
                    <img src="php/img/product/tuthan.jpg" alt="Sản phẩm 8">
                    <h2>Áo tứ thân</h2>
                    <p>Chiếc áo tứ thân được cấu tạo bởi phần lưng áo gồm hai mảnh vải cùng gam màu ghép lại với nhau, phía trước có hai thân tách rời ra và được buộc lại với nhau, thả trước bụng để tạo sự mềm mại và uyển chuyển khi mặc. Phía trên phần ngực không gài hết mà để lộ chiếc yếm thắm ẩn ở bên trong.</p>
                    <a href="product5-details.html" class="btn">Xem Chi Tiết</a>
                </div>
                <div class="product-card">
                    <img src="php/img/product/bantinu.jpg" alt="Sản phẩm 9">
                    <h2>Bán tí</h2>
                    <p>Bán tí là một dạng hình thức ống tay áo trong hệ thống y phục vùng văn hóa Đông Á trong đó có Việt Nam. Cái đặc thù nằm ở phần ống tay áo: thường chỉ có độ dài từ cùi trỏ trở lên, thậm chí là không có ống tay(còn gọi là bối tâm). Những dạng thức áo chỉ cần có ống tay ngắn như trên được xem là bán tí.</p>
                    <a href="product6-details.html" class="btn">Xem Chi Tiết</a>
                </div>
            </div>
        </div>
    </section>

    <section class="product-info">
        <div class="inner_container">
            <div class="product-image">
                <img src="php/img/product/giaolinhnu.jpg" alt="Áo Giao Lĩnh">
            </div>
            <div class="product-details page" id="giaolinh">
                <h1>Áo Giao Lĩnh</h1>
                <p class="description">
                Áo giao lĩnh còn được biết đến với tên trường lĩnh, tràng vạt, đối lĩnh là một dạng áo cổ nhất của văn hóa Đông Á. Loại áo này có cổ áo giao nhau ở trước ngực, và vạt nằm trên sẽ chéo qua bên phải của người mặc, bên trái của người nhìn. Từ xưa, loại áo này thường có nhiều kiểu ống tay áo, nhưng chủ yếu phân biệt ở dạng tay thụng rộng hoặc tay hẹp bó sát.
                Kiểu áo này phổ biến ở Việt Nam vào thời Lý - Trần - Lê, cho đến năm 1744 khi có lệnh sửa đổi cách ăn mặc của người Đàng Trong. Ở Đàng Ngoài áo cổ chéo tiếp tục có mặt cho đến khi nhà Nguyễn dẹp nhà Tây Sơn, thống nhất sơn hà.
                </p>
                <h1>Giao lĩnh vạt dài</h1>
                <p class="description">Giao lĩnh vạt dài dài quá đầu gối, cả nam lẫn nữ đều mặc. Khi mặc thì áo phủ bên ngoài thường (1 loại váy quây che hạ thể, cố định bởi 1 dây buộc lụa ở vùng hông). Dạng phục trang này phổ biến tại cả 4 nước Việt, Trung, Hàn, Nhật, song thay đổi qua các thời kỳ và nhiều khác biệt về tiểu tiết có thể dùng để nhận dạng.
Điểm đặc biệt của áo lĩnh vạt dài triều Lê là có cổ cong võng. Kiểu cổ giao lĩnh này được thấy khá phổ biến từ đời Tống về trước, song đến triều Minh, cổ giao lĩnh thẳng hơn và kéo kín hơn, làm nên sự khác biệt giữa giao lĩnh triều Lê và Minh cũng như Triều Tiên (vốn chịu ảnh hưởng bởi phục sức Minh).
Một điểm nữa có thể dùng để nhận biết là váy của Minh và Triều Tiên thường có nếp gấp còn váy thời Lê thì không.
                </p>
                </a><button onclick="switchPage('giaolinh2')" class="flip">Trang sau</button>
            </div>

            <div class="product-details page" id="giaolinh2">
                <h1>Giao lĩnh vạt ngắn</h1>
                <p class="description">
                Giao lĩnh vạt ngắn dài không quá thân trên, thường dùng cho phụ nữ. Tại Việt Nam thời Lê, giao lĩnh vạt ngắn có thường quây bên ngoài, tương tự các thời kỳ trước của Trung Quốc, có nét tương đồng với giao lĩnh quây hakama của Nhật.
Tuy nhiên giao lĩnh vạt ngắn quây thường triều Lê có thể phân biệt với giao lĩnh vạt ngắn quây thường của các triều đại ở Trung Quốc ở chỗ chiếc thường bên ngoài ngắn hơn chiếc thường (hoặc váy) bên trong, để lộ hai lớp váy. Trong khi đó, ở Trung Quốc (cũng như Nhật Bản và Triều Tiên), chiếc thường bên ngoài dài đến sát đất, che kín chiếc thường (hoặc váy) bên trong.
                </p>
                </a><button onclick="switchPage('giaolinh')" class="flip">Trang trước</button>
            </div>
        </div>
    </section>

    <section class="product-info">
        <div class="inner_container">
            <div class="product-image">
                <img src="php/img/product/vienlinhnam2.jpg" alt="Áo Viên Lĩnh">
            </div>
            <div class="product-details page" id="vienlinh">
                <h1>Áo Viên Lĩnh</h1>
                <p class="description">
                Cũng như giao lĩnh, áo viên lĩnh cũng có những biến thể, chủ yếu là ở hình dạng tay áo rộng hay chẽn. Loại áo này cũng phối hợp với thường, phủ ra ngoài hoặc mặc bên trong tùy ý của người mặc. Vào thời Lê, Nguyễn áo viên lĩnh là kiểu áo chính thức nhất của tầng lớp quan viên và triều đình.
                Vào thời Lý, áo viên lĩnh thường có bốn vạt ở trước như trong lời tả của Chu Khứ Phi thời Tống,”Những người còn lại, ngày thường trên thì vận áo Sam đen cổ tròn bó sát, bốn vạt như áo Bối Tử, gọi là áo Tứ Điên; dưới thì vận thường đen.” (trích Ngàn Năm Áo Mũ). Loại viên lĩnh bốn vạt này có thể còn tồn tại đến thời Lê.
                </p>
                <h1>Viên lĩnh vạt dài</h1>
                <p class="description">Viên lĩnh vạt dài thường được mặc phủ bên ngoài thường.</p>
 
                <h1>Viên lĩnh vạt ngắn</h1>
                <p class="description">
                Viên lĩnh vạt ngắn thường có thường quây bên ngoài, và thường dùng cho phụ nữ.
                </p>
            </div>
        </div>    
    </section>

    <section class="product-info">
        <div class="inner_container">
            <div class="product-image">
                <img src="php/img/product/doikhamnu.jpg" alt="Áo Đối Khâm">
            </div>
            <div class="product-details page" id="doikham">
                <h1>Áo Đối Khâm</h1>
                <p class="description">
                Đối khâm là vạt áo đối nhau (có thể gọi là Trực lĩnh), là một loại áo mà vạt áo mở song song trước ngực người mặc. Loại áo này là một dạng áo khoác mặc thêm ngoài cùng, tương đối dùng được cho nam giới lẫn nữ giới.
                Đối Khâm (對襟) Chữ Khâm (襟) có nghĩa là vạt áo trước. Áo nhật bình vào thời Nguyễn hay áo tứ thân cũng là một dạng của áo đối khâm. Mỗi thời đại, kiểu dáng sẽ thay đổi đôi chút. Không như giao lĩnh và viên lĩnh (có 6 thân), hay thụ lĩnh triều Nguyễn (có 5 thân – còn được gọi là ngũ thân), đối khâm chỉ có 4 thân nên dân gian còn gọi là tứ thân.
                </p>

                <h1>Áo Nhật Bình</h1>
                <p class="description">
                Nhật bình thuộc dạng thức áo đối khâm khoác bên ngoài áo dài tay chẽn hoặc áo tấc, được cài khuy chính giữa. Ngoài ra, nút áo tròn bằng ngọc điêu khắc tinh xảo dùng để trang trí chính là điểm đặc trưng của nhật bình so với áo đối khâm phi phong nhà Minh.
                Nguồn gốc Áo Nhật Bình được nhà Nguyễn phát triển lên, là dạng áo Đối Khâm có cổ hình chữ nhật to bản, dùng dây buộc 2 vạt áo. Do hoa văn ở cổ áo khi ghép lại tạo thành một hình chữ nhật ngay trước ngực người mặc, nên áo này gọi là áo Nhật Bình. Khắp thân áo trang trí theo thể thức hoa văn chính là dạng hình tròn khép kín, rải rác khắp áo đan xen với các hình phượng múa, hoa lá đính thêm các hạt tuyến lấp lánh. Ở tay áo đặc biệt có dải màu ngũ hành; lục, vàng, xanh, trắng, đỏ. Tuy nhiên quy chế tay dãy màu này lại không áp dụng trên loại áo Nhật Bình của bậc Hậu.
                </p>
                </a><button onclick="switchPage('doikham2')" class="flip">Trang sau</button>
            </div>

            <div class="product-details page" id="doikham2">
                <h1>Áo tứ thân</h1>
                <p class="description">
                Theo các nhà nghiên cứu lịch sử, áo tứ thân là sự tiến hóa từ áo đối khâm. Trong thế kỷ 20, trang phục của phụ nữ cần phải đơn giản để phù hợp với công việc nông nghiệp. Do đó, áo đối khâm đã được cải tiến để trở thành áo tứ thân như chúng ta biết ngày nay.
                Mặc dù vậy, áo tứ thân vẫn giữ được thiết kế cổ áo đặc trưng. Khi mặc, người phụ nữ sẽ buộc hai tà áo phía trước lại với nhau để tạo nên vẻ ngoài gọn gàng, thuận tiện cho việc làm việc.
                </p>
                </a><button onclick="switchPage('doikham')" class="flip">Trang trước</button>
            </div>
    <script>
    function showProductInfo(pageId) {
        const categorySection = document.querySelector('.Category');
        categorySection.style.display = 'none';  

        const productInfos = document.querySelectorAll('.product-info');
        productInfos.forEach(info => info.style.display = 'none');

        const currentProductInfo = document.querySelector(`.product-info [id="${pageId}"]`);
        if (currentProductInfo) {
            currentProductInfo.closest('.product-info').style.display = 'block';
        }

        const pages = document.querySelectorAll('.page');
        pages.forEach(page => page.classList.remove('active'));

        document.getElementById(pageId).classList.add('active');

        history.pushState({ pageId }, '', `#${pageId}`);
    }

    window.addEventListener('popstate', (event) => {
        if (event.state) {
            showProductInfo(event.state.pageId);
        } else {
            const categorySection = document.querySelector('.Category');
            categorySection.style.display = 'block';  
            
            const productInfos = document.querySelectorAll('.product-info');
            productInfos.forEach(info => info.style.display = 'none'); 
        }
    });

    function switchPage(pageId) {
        const pages = document.querySelectorAll('.page');
        pages.forEach(page => page.classList.remove('active'));

        document.getElementById(pageId).classList.add('active');
    }
    </script>
 
</body>
</html>
