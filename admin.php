<?php include('auth.php'); ?>

<?php include('auth.php'); ?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم | Salam Tour</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { font-family: 'Cairo', sans-serif; }
        .sidebar-link:hover, .sidebar-link.active {
            background-color: rgba(59, 130, 246, 0.1);
            color: #2563eb;
            border-left: 4px solid #2563eb;
        }
    </style>
</head>
<body class="bg-gray-100 flex h-screen overflow-hidden">

    <!-- 1. Sidebar (القائمة الجانبية) -->
    <aside class="w-64 bg-white shadow-xl h-full flex flex-col hidden md:flex">
        <div class="p-6 border-b">
            <div class="flex items-center">
                <img src="رابط_شعارك_هنا.png" alt="Logo" class="h-8 ml-2">
                <span class="text-xl font-bold text-blue-700">Salam Tour</span>
            </div>
            <p class="text-[10px] text-gray-400 mt-1 uppercase tracking-widest">نظام إدارة الوكالة</p>
        </div>

        <nav class="flex-1 p-4 space-y-2 overflow-y-auto">
            <a href="#" class="sidebar-link active flex items-center p-3 rounded-lg transition text-gray-600">
                <i class="fas fa-chart-pie ml-3 w-5"></i> <span class="font-bold">الإحصائيات</span>
            </a>
            <a href="#" class="sidebar-link flex items-center p-3 rounded-lg transition text-gray-600">
                <i class="fas fa-car ml-3 w-5"></i> <span class="font-bold">إدارة الأسطول</span>
            </a>
            <a href="#" class="sidebar-link flex items-center p-3 rounded-lg transition text-gray-600">
                <i class="fas fa-calendar-check ml-3 w-5"></i> <span class="font-bold">الحجوزات</span>
                <span class="mr-auto bg-red-100 text-red-600 text-xs px-2 py-0.5 rounded-full">5</span>
            </a>
            <a href="#" class="sidebar-link flex items-center p-3 rounded-lg transition text-gray-600">
                <i class="fas fa-hotel ml-3 w-5"></i> <span class="font-bold">الفنادق الشريكة</span>
            </a>
            <a href="#" class="sidebar-link flex items-center p-3 rounded-lg transition text-gray-600">
                <i class="fas fa-file-contract ml-3 w-5"></i> <span class="font-bold">العقود والأرشيف</span>
            </a>
            <div class="pt-4 mt-4 border-t">
                <a href="#" class="sidebar-link flex items-center p-3 rounded-lg transition text-gray-600">
                    <i class="fas fa-cog ml-3 w-5"></i> <span class="font-bold">الإعدادات</span>
                </a>
                <a href="index.html" class="flex items-center p-3 rounded-lg text-red-500 hover:bg-red-50 transition">
                    <i class="fas fa-sign-out-alt ml-3 w-5"></i> <span class="font-bold">خروج</span>
                </a>
            </div>
        </nav>
    </aside>

    <!-- 2. Main Content Area -->
    <main class="flex-1 flex flex-col overflow-y-auto">
        
        <!-- Top Header -->
        <header class="bg-white shadow-sm p-4 flex justify-between items-center px-8">
            <h2 class="text-xl font-bold text-gray-800">نظرة عامة على البيانات</h2>
            <div class="flex items-center space-x-reverse space-x-4">
                <button class="relative p-2 text-gray-400 hover:text-blue-600">
                    <i class="fas fa-bell text-xl"></i>
                    <span class="absolute top-1 left-1 bg-red-500 w-2 h-2 rounded-full border-2 border-white"></span>
                </button>
                <div class="flex items-center border-r pr-4 mr-4">
                    <div class="text-left ml-3">
                        <p class="text-sm font-bold text-gray-800">مراد المدير</p>
                        <p class="text-[10px] text-green-500 font-bold">مدير النظام</p>
                    </div>
                    <img src="https://ui-avatars.com/api/?name=Admin&background=0D8ABC&color=fff" class="w-10 h-10 rounded-full border">
                </div>
            </div>
        </header>

        <!-- Stats Grid -->
        <div class="p-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white p-6 rounded-2xl shadow-sm border-r-4 border-blue-500">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-sm text-gray-400 font-bold">إجمالي الأرباح</p>
                        <h3 class="text-2xl font-extrabold text-gray-800 mt-1">$45,200</h3>
                    </div>
                    <div class="bg-blue-50 p-3 rounded-xl text-blue-600">
                        <i class="fas fa-dollar-sign text-2xl"></i>
                    </div>
                </div>
                <p class="text-xs text-green-500 mt-4 font-bold"><i class="fas fa-arrow-up ml-1"></i> 12% منذ الشهر الماضي</p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow-sm border-r-4 border-green-500">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-sm text-gray-400 font-bold">سيارات مؤجرة</p>
                        <h3 class="text-2xl font-extrabold text-gray-800 mt-1">18 / 24</h3>
                    </div>
                    <div class="bg-green-50 p-3 rounded-xl text-green-600">
                        <i class="fas fa-key text-2xl"></i>
                    </div>
                </div>
                <div class="w-full bg-gray-100 h-2 rounded-full mt-4">
                    <div class="bg-green-500 h-2 rounded-full" style="width: 75%"></div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow-sm border-r-4 border-yellow-500">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-sm text-gray-400 font-bold">حجوزات معلقة</p>
                        <h3 class="text-2xl font-extrabold text-gray-800 mt-1">5</h3>
                    </div>
                    <div class="bg-yellow-50 p-3 rounded-xl text-yellow-600">
                        <i class="fas fa-clock text-2xl"></i>
                    </div>
                </div>
                <button class="text-xs text-blue-600 mt-4 font-bold hover:underline">عرض جميع الطلبات</button>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow-sm border-r-4 border-purple-500">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-sm text-gray-400 font-bold">شركاء الفنادق</p>
                        <h3 class="text-2xl font-extrabold text-gray-800 mt-1">12</h3>
                    </div>
                    <div class="bg-purple-50 p-3 rounded-xl text-purple-600">
                        <i class="fas fa-building text-2xl"></i>
                    </div>
                </div>
                <p class="text-xs text-gray-400 mt-4 font-bold">2 فنادق جديدة هذا الأسبوع</p>
            </div>
        </div>

        <!-- Latest Bookings Table -->
        <div class="px-8 pb-8">
            <div class="bg-white rounded-2xl shadow-sm border overflow-hidden">
                <div class="p-6 border-b flex justify-between items-center">
                    <h3 class="font-bold text-gray-800">آخر الحجوزات الواردة</h3>
                    <div class="flex gap-2">
                        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg text-xs font-bold hover:bg-blue-700 transition">
                            <i class="fas fa-plus ml-1"></i> حجز يدوي جديد
                        </button>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-right">
                        <thead class="bg-gray-50 text-gray-400 text-xs uppercase">
                            <tr>
                                <th class="p-4">العميل</th>
                                <th class="p-4">السيارة</th>
                                <th class="p-4">تاريخ الاستلام</th>
                                <th class="p-4">الإجمالي</th>
                                <th class="p-4">الحالة</th>
                                <th class="p-4">الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm divide-y">
                            <tr>
                                <td class="p-4 font-bold">محمد العتيبي</td>
                                <td class="p-4 text-gray-600">مرسيدس E-Class</td>
                                <td class="p-4 text-gray-500">2024/05/20</td>
                                <td class="p-4 font-bold text-blue-600">$650</td>
                                <td class="p-4">
                                    <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-[10px] font-bold">مؤكد</span>
                                </td>
                                <td class="p-4 flex gap-2">
                                    <button class="text-gray-400 hover:text-blue-600"><i class="fas fa-eye"></i></button>
                                    <button class="text-gray-400 hover:text-green-600"><i class="fas fa-file-pdf"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-4 font-bold">سارة أحمد</td>
                                <td class="p-4 text-gray-600">تويوتا لاند كروزر</td>
                                <td class="p-4 text-gray-500">2024/05/22</td>
                                <td class="p-4 font-bold text-blue-600">$900</td>
                                <td class="p-4">
                                    <span class="bg-yellow-100 text-yellow-600 px-3 py-1 rounded-full text-[10px] font-bold">قيد الانتظار</span>
                                </td>
                                <td class="p-4 flex gap-2">
                                    <button class="text-gray-400 hover:text-blue-600"><i class="fas fa-eye"></i></button>
                                    <button class="text-gray-400 hover:text-green-600"><i class="fas fa-check"></i></button>
                                    <button class="text-gray-400 hover:text-red-600"><i class="fas fa-times"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </main>

</body>
</html>