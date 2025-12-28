"use client";

import React from "react";
import Image from "next/image";
import { 
  Heart, 
  Activity, 
  ShieldCheck, 
  MessageSquare, 
  Phone, 
  ChevronRight, 
  Star, 
  CheckCircle2, 
  Users,
  Stethoscope,
  Brain,
  Menu,
  Video,
  FileText,
  MapPin,
  Ambulance,
  Send,
  Mail,
  ArrowRight,
  X
} from "lucide-react";
import { motion, AnimatePresence } from "framer-motion";
import { Button } from "@/components/ui/button";
import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card";
import { Badge } from "@/components/ui/badge";
import { 
  Table, 
  TableBody, 
  TableCell, 
  TableHead, 
  TableHeader, 
  TableRow 
} from "@/components/ui/table";
import {
  Sheet,
  SheetContent,
  SheetHeader,
  SheetTitle,
  SheetTrigger,
  SheetClose,
} from "@/components/ui/sheet";
import Link from "next/link";

const fadeIn = {
  initial: { opacity: 0, y: 20 },
  animate: { opacity: 1, y: 0 },
  transition: { duration: 0.6 }
};

const stagger = {
  animate: {
    transition: {
      staggerChildren: 0.1
    }
  }
};

const clinicPhotos = [
  { url: "/images/clinic-3.webp", caption: "Здание клиники" },
  { url: "/images/clinic-1.webp", caption: "Уютные палаты" },
  { url: "/images/clinic-4.webp", caption: "Просторные холлы" },
  { url: "/images/clinic-5.webp", caption: "Зона отдыха" },
  { url: "/images/clinic-6.webp", caption: "Современные коридоры" },
  { url: "/images/clinic-7.webp", caption: "Комфортные номера" },
  { url: "/images/clinic-hero.webp", caption: "Внешний вид" },
];

export default function LandingPage() {
  const [mounted, setMounted] = React.useState(false);
  const [isModalOpen, setIsModalOpen] = React.useState(false);

  React.useEffect(() => {
    setMounted(true);
  }, []);

  if (!mounted) {
    return <div className="min-h-screen bg-background" />;
  }

  return (
    <div className="min-h-screen bg-[#fafafa] text-[#1e1b4b] selection:bg-purple-200 selection:text-purple-900">
      {/* HEADER */}
      <header className="fixed top-0 z-50 w-full border-b bg-white/80 backdrop-blur-md">
        <div className="container mx-auto flex h-20 items-center justify-between px-4">
          <div className="flex items-center gap-3">
            <div className="flex h-12 w-12 items-center justify-center rounded-2xl bg-purple-600 text-white shadow-lg shadow-purple-200 rotate-[-5deg]">
              <Heart className="h-7 w-7 fill-current" />
            </div>
            <div className="flex flex-col">
              <span className="text-2xl font-black tracking-tighter text-purple-700 leading-none uppercase">Extramed-Psy</span>
              <span className="text-[10px] uppercase tracking-widest text-muted-foreground font-bold">Краснодар</span>
            </div>
          </div>
          
          <nav className="hidden lg:flex items-center gap-8">
            <a href="#conditions" className="text-sm font-bold text-slate-600 hover:text-purple-600 transition-colors">С чем работаем</a>
            <a href="#prices" className="text-sm font-bold text-slate-600 hover:text-purple-600 transition-colors">Стоимость</a>
            <Link href="/articles" className="text-sm font-black text-purple-600 hover:text-purple-700 transition-colors border-b-2 border-purple-600">База знаний</Link>
            <a href="#contacts" className="text-sm font-bold text-slate-600 hover:text-purple-600 transition-colors">Контакты</a>
          </nav>

          <div className="flex items-center gap-4">
            <Button variant="outline" className="hidden sm:flex border-purple-600 text-purple-600 hover:bg-purple-600 hover:text-white font-bold rounded-xl h-12 px-6" asChild>
              <a href="tel:88612906619">
                <Phone className="mr-2 h-5 w-5" />
                8 (861) 290-66-19
              </a>
            </Button>
            
            <Sheet>
              <SheetTrigger asChild>
                <Button variant="ghost" size="icon" className="lg:hidden rounded-xl bg-purple-50 hover:bg-purple-100">
                  <Menu className="h-7 w-7 text-purple-600" />
                </Button>
              </SheetTrigger>
              <SheetContent side="right" className="w-[300px] sm:w-[400px] border-l-purple-100 p-0">
                <div className="flex flex-col h-full bg-white">
                  <div className="p-6 border-b border-purple-50">
                    <div className="flex items-center gap-3">
                      <div className="h-10 w-10 bg-purple-600 rounded-xl flex items-center justify-center text-white rotate-[-5deg]">
                        <Heart className="h-6 w-6 fill-current" />
                      </div>
                      <span className="text-xl font-black text-purple-700">МЕНЮ</span>
                    </div>
                  </div>
                  <nav className="flex-1 overflow-y-auto p-6 flex flex-col gap-1">
                    <SheetClose asChild>
                      <a href="#conditions" className="text-lg font-bold text-slate-700 hover:text-purple-600 py-4 px-4 hover:bg-purple-50 rounded-2xl transition-all border-b border-slate-50">С чем работаем</a>
                    </SheetClose>
                    <SheetClose asChild>
                      <a href="#prices" className="text-lg font-bold text-slate-700 hover:text-purple-600 py-4 px-4 hover:bg-purple-50 rounded-2xl transition-all border-b border-slate-50">Стоимость</a>
                    </SheetClose>
                    <SheetClose asChild>
                      <Link href="/articles" className="text-lg font-black text-purple-600 py-4 px-4 hover:bg-purple-50 rounded-2xl transition-all border-b border-slate-50">База знаний</Link>
                    </SheetClose>
                    <SheetClose asChild>
                      <a href="#contacts" className="text-lg font-bold text-slate-700 hover:text-purple-600 py-4 px-4 hover:bg-purple-50 rounded-2xl transition-all">Контакты</a>
                    </SheetClose>
                    
                    <div className="mt-8">
                      <p className="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] mb-4 ml-4">Свяжитесь с нами</p>
                      <div className="flex flex-col gap-3">
                        <Button className="w-full justify-start bg-purple-600 text-white font-bold h-16 rounded-2xl px-6" asChild>
                          <a href="tel:88612906619">
                            <Phone className="mr-3 h-5 w-5" />
                            8 (861) 290-66-19
                          </a>
                        </Button>
                        <Button variant="outline" className="w-full justify-start border-[#25D366] text-[#25D366] hover:bg-[#25D366] hover:text-white font-bold h-16 rounded-2xl px-6" asChild>
                          <a href="https://wa.me/79282579115" target="_blank" rel="noopener noreferrer">
                            <MessageSquare className="mr-3 h-5 w-5" />
                            WhatsApp
                          </a>
                        </Button>
                        <Button variant="outline" className="w-full justify-start border-[#229ED9] text-[#229ED9] hover:bg-[#229ED9] hover:text-white font-bold h-16 rounded-2xl px-6" asChild>
                          <a href="https://t.me/ExtraMed93" target="_blank" rel="noopener noreferrer">
                            <Send className="mr-3 h-5 w-5" />
                            Telegram
                          </a>
                        </Button>
                      </div>
                    </div>
                  </nav>
                </div>
              </SheetContent>
            </Sheet>
          </div>
        </div>
      </header>

      {/* Side Floating CTA (Desktop) */}
      <div className="fixed right-6 top-1/2 -translate-y-1/2 z-50 hidden md:flex flex-col gap-4">
        <a href="https://wa.me/79282579115" target="_blank" rel="noopener noreferrer" className="group flex items-center gap-3">
          <span className="bg-white px-3 py-1.5 rounded-lg shadow-xl text-xs font-bold text-slate-600 opacity-0 group-hover:opacity-100 transition-opacity translate-x-4 group-hover:translate-x-0">WhatsApp</span>
          <div className="h-14 w-14 rounded-full bg-[#25D366] text-white flex items-center justify-center shadow-2xl hover:scale-110 transition-transform border-4 border-white">
            <MessageSquare className="h-7 w-7" />
          </div>
        </a>
        <a href="https://t.me/ExtraMed93" target="_blank" rel="noopener noreferrer" className="group flex items-center gap-3">
          <span className="bg-white px-3 py-1.5 rounded-lg shadow-xl text-xs font-bold text-slate-600 opacity-0 group-hover:opacity-100 transition-opacity translate-x-4 group-hover:translate-x-0">Telegram</span>
          <div className="h-14 w-14 rounded-full bg-[#229ED9] text-white flex items-center justify-center shadow-2xl hover:scale-110 transition-transform border-4 border-white">
            <Send className="h-7 w-7" />
          </div>
        </a>
        <a href="tel:88612906619" className="group flex items-center gap-3">
          <span className="bg-white px-3 py-1.5 rounded-lg shadow-xl text-xs font-bold text-slate-600 opacity-0 group-hover:opacity-100 transition-opacity translate-x-4 group-hover:translate-x-0">Позвонить</span>
          <div className="h-14 w-14 rounded-full bg-purple-600 text-white flex items-center justify-center shadow-2xl hover:scale-110 transition-transform animate-pulse border-4 border-white">
            <Phone className="h-7 w-7" />
          </div>
        </a>
      </div>

      {/* Mobile Floating CTA (Mobile Only - Bottom right) */}
      <div className="fixed bottom-6 right-6 z-40 md:hidden flex flex-col gap-3">
        <a href="https://wa.me/79282579115" target="_blank" rel="noopener noreferrer">
          <Button size="lg" className="h-16 w-16 rounded-full bg-[#25D366] text-white shadow-2xl border-4 border-white active:scale-95 flex items-center justify-center">
            <MessageSquare className="h-8 w-8" />
          </Button>
        </a>
        <a href="tel:88612906619">
          <Button size="lg" className="h-16 w-16 rounded-full bg-purple-600 text-white shadow-2xl animate-pulse border-4 border-white active:scale-95 flex items-center justify-center">
            <Phone className="h-8 w-8" />
          </Button>
        </a>
      </div>

      <main className="pt-20">
        {/* HERO SECTION */}
        <section id="hero" className="relative overflow-hidden py-16 lg:py-24 bg-gradient-to-br from-purple-50 to-white">
          <div className="container mx-auto px-4">
            <div className="grid gap-12 lg:grid-cols-2 lg:items-center">
              <motion.div 
                initial="initial"
                animate="animate"
                variants={stagger}
                className="flex flex-col gap-8 text-center lg:text-left"
              >
                <motion.div variants={fadeIn}>
                  <Badge variant="secondary" className="mb-6 bg-purple-100 text-purple-700 px-5 py-2 text-sm font-bold flex w-fit mx-auto lg:mx-0 items-center gap-2 rounded-full border border-purple-200">
                    <MapPin className="h-4 w-4" /> г. Краснодар, ул. Лизы Чайкиной
                  </Badge>
                  <h1 className="text-4xl font-black tracking-tight sm:text-6xl lg:text-7xl text-slate-900 leading-[1.05] mb-8">
                    Пансионат для пожилых в Краснодаре: <span className="text-purple-600">профессиональный уход</span> и безопасность
                  </h1>
                </motion.div>
                <motion.p variants={fadeIn} className="text-lg sm:text-xl text-slate-500 max-w-2xl mx-auto lg:mx-0 leading-relaxed font-medium">
                  Ваш близкий в надежных руках. В пансионате «Extramed-Psy» на улице Лизы Чайкиной мы берем на себя все заботы о здоровье и комфорте пожилых людей. Мы не просто обеспечиваем проживание — мы возвращаем качество жизни, спокойствие для семьи и профессиональную помощь при самых сложных диагнозах. Круглосуточно, с заботой и по медицинским стандартам.
                </motion.p>
                <motion.div variants={fadeIn} className="flex flex-col sm:flex-row justify-center lg:justify-start gap-5 mt-4">
                  <Button size="lg" className="rounded-2xl px-12 bg-purple-600 hover:bg-purple-700 text-white shadow-2xl shadow-purple-200 h-16 text-lg font-black active:scale-95">
                    Получить консультацию врача
                  </Button>
                  <Button size="lg" variant="outline" className="rounded-2xl px-12 border-purple-600 text-purple-600 hover:bg-purple-50 h-16 text-lg font-bold flex gap-3 active:scale-95" onClick={() => setIsModalOpen(true)}>
                    <Video className="h-6 w-6" /> Записаться на онлайн-экскурсию
                  </Button>
                </motion.div>
              </motion.div>
              <motion.div 
                initial={{ opacity: 0, scale: 0.95, rotate: 2 }}
                animate={{ opacity: 1, scale: 1, rotate: 0 }}
                transition={{ duration: 0.8 }}
                className="relative aspect-square lg:aspect-[4/5] rounded-[3rem] overflow-hidden shadow-2xl border-[12px] border-white"
              >
                <Image 
                  src="/images/clinic-3.webp" 
                  alt="Пансионат Extramed-Psy"
                  fill
                  className="object-cover"
                  priority
                />
                <div className="absolute inset-0 bg-gradient-to-t from-purple-900/30 via-transparent to-transparent" />
              </motion.div>
            </div>
          </div>
          <div className="absolute -z-10 top-0 right-0 w-1/2 h-1/2 bg-purple-100/50 blur-[150px] rounded-full translate-x-1/2 -translate-y-1/2" />
        </section>

        {/* CLINIC PHOTO GALLERY */}
        <section className="py-20 lg:py-32 bg-white overflow-hidden">
          <div className="container mx-auto px-4">
            <div className="text-center mb-16">
              <h2 className="text-3xl font-black text-slate-900 sm:text-5xl mb-6">Фотографии нашей клиники</h2>
              <p className="text-slate-500 max-w-2xl mx-auto text-lg">Посмотрите на условия проживания, которые мы создали для ваших близких. Уют, безопасность и медицинское оснащение.</p>
            </div>
            <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
              {clinicPhotos.map((photo, i) => (
                <motion.div 
                  key={i}
                  whileHover={{ y: -10 }}
                  className={`relative aspect-[4/3] rounded-[2.5rem] overflow-hidden shadow-xl group cursor-pointer ${i === 0 ? 'lg:col-span-2 lg:row-span-2 aspect-auto' : ''}`}
                >
                  <Image src={photo.url} alt={photo.caption} fill className="object-cover transition-transform duration-700 group-hover:scale-110" />
                  <div className="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity" />
                  <div className="absolute bottom-6 left-6 translate-y-4 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all">
                    <Badge className="bg-white/90 text-purple-900 border-none font-bold">{photo.caption}</Badge>
                  </div>
                </motion.div>
              ))}
            </div>
          </div>
        </section>

        {/* SECTION 2: CONDITIONS */}
        <section id="conditions" className="bg-purple-50/30 py-20 lg:py-32 border-y">
          <div className="container mx-auto px-4">
            <div className="mb-20 text-center">
              <h2 className="mb-6 text-3xl font-black tracking-tight text-slate-900 sm:text-5xl">
                Специализируемся на сложных возрастных заболеваниях
              </h2>
              <p className="mx-auto max-w-3xl text-lg sm:text-xl text-slate-500 leading-relaxed font-medium">
                Мы глубоко понимаем специфику заболеваний, которые требуют не просто ухода, а особых знаний и терпения.
              </p>
            </div>

            <div className="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
              <Card className="border-none shadow-2xl bg-white hover:shadow-purple-200 transition-all group overflow-hidden rounded-[2.5rem] p-4">
                <div className="mb-6 flex h-16 w-16 items-center justify-center rounded-2xl bg-purple-100 text-purple-600 group-hover:bg-purple-600 group-hover:text-white transition-all group-hover:rotate-6">
                  <Brain className="h-9 w-9" />
                </div>
                <CardHeader className="pt-0">
                  <CardTitle className="text-2xl font-black">Неврология</CardTitle>
                </CardHeader>
                <CardContent>
                  <ul className="space-y-4 text-slate-500 font-bold">
                    <li className="flex items-start gap-3"><CheckCircle2 className="h-5 w-5 text-purple-600 shrink-0 mt-0.5" /> <span>Деменция и болезнь Альцгеймера</span></li>
                    <li className="flex items-start gap-3"><CheckCircle2 className="h-5 w-5 text-purple-600 shrink-0 mt-0.5" /> <span>Болезнь Паркинсона</span></li>
                    <li className="flex items-start gap-3"><CheckCircle2 className="h-5 w-5 text-purple-600 shrink-0 mt-0.5" /> <span>Рассеянный склероз</span></li>
                    <li className="flex items-start gap-3"><CheckCircle2 className="h-5 w-5 text-purple-600 shrink-0 mt-0.5" /> <span>Последствия инсульта</span></li>
                  </ul>
                </CardContent>
              </Card>

              <Card className="border-none shadow-2xl bg-white hover:shadow-purple-200 transition-all group overflow-hidden rounded-[2.5rem] p-4">
                <div className="mb-6 flex h-16 w-16 items-center justify-center rounded-2xl bg-purple-100 text-purple-600 group-hover:bg-purple-600 group-hover:text-white transition-all group-hover:rotate-6">
                  <Activity className="h-9 w-9" />
                </div>
                <CardHeader className="pt-0">
                  <CardTitle className="text-2xl font-black">Реабилитация</CardTitle>
                </CardHeader>
                <CardContent>
                  <ul className="space-y-4 text-slate-500 font-bold">
                    <li className="flex items-start gap-3"><CheckCircle2 className="h-5 w-5 text-purple-600 shrink-0 mt-0.5" /> <span>Восстановление после инфаркта</span></li>
                    <li className="flex items-start gap-3"><CheckCircle2 className="h-5 w-5 text-purple-600 shrink-0 mt-0.5" /> <span>Перелом шейки бедра</span></li>
                    <li className="flex items-start gap-3"><CheckCircle2 className="h-5 w-5 text-purple-600 shrink-0 mt-0.5" /> <span>Уход за лежачими больными</span></li>
                    <li className="flex items-start gap-3"><CheckCircle2 className="h-5 w-5 text-purple-600 shrink-0 mt-0.5" /> <span>Постоперационный уход</span></li>
                  </ul>
                </CardContent>
              </Card>

              <Card className="border-none shadow-2xl bg-white hover:shadow-purple-200 transition-all group overflow-hidden rounded-[2.5rem] p-4">
                <div className="mb-6 flex h-16 w-16 items-center justify-center rounded-2xl bg-purple-100 text-purple-600 group-hover:bg-purple-600 group-hover:text-white transition-all group-hover:rotate-6">
                  <Stethoscope className="h-9 w-9" />
                </div>
                <CardHeader className="pt-0">
                  <CardTitle className="text-2xl font-black">Хронические случаи</CardTitle>
                </CardHeader>
                <CardContent>
                  <ul className="space-y-4 text-slate-500 font-bold">
                    <li className="flex items-start gap-3"><CheckCircle2 className="h-5 w-5 text-purple-600 shrink-0 mt-0.5" /> <span>Сахарный диабет</span></li>
                    <li className="flex items-start gap-3"><CheckCircle2 className="h-5 w-5 text-purple-600 shrink-0 mt-0.5" /> <span>Гипертония и ССЗ</span></li>
                    <li className="flex items-start gap-3"><CheckCircle2 className="h-5 w-5 text-purple-600 shrink-0 mt-0.5" /> <span>Онкология (паллиативный уход)</span></li>
                    <li className="flex items-start gap-3"><CheckCircle2 className="h-5 w-5 text-purple-600 shrink-0 mt-0.5" /> <span>Артрит и артроз</span></li>
                  </ul>
                </CardContent>
              </Card>
            </div>
          </div>
        </section>

        {/* PRICING SECTION */}
        <section id="prices" className="py-20 lg:py-32 bg-slate-50">
          <div className="container mx-auto px-4">
            <div className="mb-16 text-center">
              <h2 className="text-3xl font-black text-slate-900 sm:text-5xl">Стоимость услуг</h2>
              <p className="mt-6 text-slate-500 text-lg font-bold">Никаких скрытых платежей. Все цены зафиксированы в договоре.</p>
            </div>
            <div className="overflow-hidden rounded-[3rem] border border-slate-200 bg-white shadow-2xl">
              <div className="overflow-x-auto">
                <Table className="min-w-[700px]">
                  <TableHeader className="bg-purple-600">
                    <TableRow className="hover:bg-purple-600">
                      <TableHead className="py-8 px-10 text-xl font-black text-white">Услуга</TableHead>
                      <TableHead className="py-8 px-10 text-right text-xl font-black text-white">Стоимость</TableHead>
                    </TableRow>
                  </TableHeader>
                  <TableBody>
                    {[
                      { name: "Первичная консультация гериатра", price: "бесплатно" },
                      { name: "Размещение (базовый уход)", price: "от 1750 ₽ / сут" },
                      { name: "Реабилитационный пакет", price: "от 2000 ₽ / сут" },
                      { name: "Вызов психиатра на дом", price: "от 3000 ₽" },
                      { name: "Вызов невролога на дом", price: "от 3000 ₽" },
                      { name: "Специализированная перевозка", price: "от 2000 ₽" },
                    ].map((item, i) => (
                      <TableRow key={i} className="hover:bg-purple-50 transition-colors">
                        <TableCell className="py-7 px-10 font-bold text-lg text-slate-700">{item.name}</TableCell>
                        <TableCell className="py-7 px-10 text-right text-purple-700 font-black text-xl">{item.price}</TableCell>
                      </TableRow>
                    ))}
                  </TableBody>
                </Table>
              </div>
            </div>
          </div>
        </section>

        {/* FINAL CTA SECTION */}
        <section id="contacts" className="bg-purple-700 py-24 sm:py-32 text-white overflow-hidden relative">
          <div className="container mx-auto px-4 text-center relative z-10">
            <h2 className="mb-10 text-4xl font-black tracking-tight sm:text-7xl leading-tight">
              Позаботьтесь о близком <br className="hidden sm:block" /> с профессионалами.
            </h2>
            <div className="flex flex-col sm:flex-row justify-center gap-6">
              <a href="tel:88612906619" className="w-full sm:w-auto">
                <Button size="lg" className="rounded-2xl w-full px-12 h-20 text-2xl font-black bg-white text-purple-700 hover:scale-105 transition-transform shadow-2xl active:scale-95">
                  <Phone className="mr-4 h-8 w-8" />
                  8 (861) 290-66-19
                </Button>
              </a>
              <a href="https://wa.me/79282579115" target="_blank" rel="noopener noreferrer" className="w-full sm:w-auto">
                <Button size="lg" variant="outline" className="rounded-2xl w-full px-12 h-20 text-2xl font-bold border-white/30 text-white hover:bg-white/10 active:scale-95">
                  <MessageSquare className="mr-4 h-8 w-8 text-[#25D366]" />
                  WhatsApp
                </Button>
              </a>
            </div>
          </div>
          <div className="absolute top-0 left-0 w-[40rem] h-[40rem] bg-white/5 blur-[150px] rounded-full -translate-x-1/2 -translate-y-1/2" />
        </section>
      </main>

      {/* FOOTER */}
      <footer className="border-t py-20 bg-slate-50">
        <div className="container mx-auto px-4 text-center md:text-left">
          <div className="grid gap-16 lg:grid-cols-4 mb-16">
            <div className="lg:col-span-2">
              <div className="flex items-center gap-3 mb-8 justify-center md:justify-start">
                <div className="h-10 w-10 bg-purple-600 rounded-xl flex items-center justify-center text-white shadow-lg">
                  <Heart className="h-6 w-6 fill-current" />
                </div>
                <span className="text-2xl font-black text-purple-700 uppercase tracking-tighter">Extramed-Psy</span>
              </div>
              <p className="text-slate-500 text-lg max-w-md font-bold leading-relaxed mx-auto md:mx-0">
                Профессиональный уход за пожилыми людьми в Краснодаре. Медицинские стандарты и домашний уют.
              </p>
            </div>
            <div>
              <h4 className="font-black text-slate-900 mb-8 uppercase tracking-widest text-xs">Навигация</h4>
              <ul className="space-y-4 text-slate-500 font-bold">
                <li><a href="#hero" className="hover:text-purple-600 transition-colors">Главная</a></li>
                <li><Link href="/articles" className="hover:text-purple-600 transition-colors">База знаний</Link></li>
                <li><a href="#conditions" className="hover:text-purple-600 transition-colors">Заболевания</a></li>
                <li><a href="#prices" className="hover:text-purple-600 transition-colors">Стоимость</a></li>
              </ul>
            </div>
            <div>
              <h4 className="font-black text-slate-900 mb-8 uppercase tracking-widest text-xs">Контакты</h4>
              <ul className="space-y-6">
                <li className="flex items-start gap-3 text-slate-500 font-bold justify-center md:justify-start">
                  <MapPin className="h-5 w-5 text-purple-600 shrink-0 mt-1" />
                  <span>г. Краснодар, ул. Лизы Чайкиной</span>
                </li>
                <li className="flex items-center gap-3 font-black text-purple-700 text-xl justify-center md:justify-start">
                  <Phone className="h-6 w-6" /> 
                  <a href="tel:88612906619">8 (861) 290-66-19</a>
                </li>
              </ul>
            </div>
          </div>
          <div className="border-t pt-10 flex flex-col md:flex-row justify-between items-center gap-6 text-sm font-bold text-slate-400">
            <p>© 2024 Extramed-Psy. Все права защищены.</p>
            <div className="flex gap-8">
              <a href="#" className="hover:text-purple-600 transition-colors">Политика конфиденциальности</a>
            </div>
          </div>
        </div>
      </footer>

      {/* EXCURSION MODAL */}
      <AnimatePresence>
        {isModalOpen && (
          <motion.div 
            initial={{ opacity: 0 }}
            animate={{ opacity: 1 }}
            exit={{ opacity: 0 }}
            className="fixed inset-0 z-[100] flex items-center justify-center p-4 bg-slate-900/80 backdrop-blur-sm"
            onClick={() => setIsModalOpen(false)}
          >
            <motion.div 
              initial={{ scale: 0.9, y: 20 }}
              animate={{ scale: 1, y: 0 }}
              exit={{ scale: 0.9, y: 20 }}
              className="bg-white rounded-[3rem] p-10 max-w-lg w-full shadow-2xl relative"
              onClick={(e) => e.stopPropagation()}
            >
              <button className="absolute top-8 right-8 text-slate-400 hover:text-purple-600 transition-colors" onClick={() => setIsModalOpen(false)}>
                <X className="h-8 w-8" />
              </button>
              <h3 className="text-3xl font-black text-slate-900 mb-4">Онлайн-экскурсия</h3>
              <p className="text-slate-500 font-bold mb-8">Оставьте ваши контакты, и мы проведем для вас видео-тур по нашему пансионату.</p>
              <form action="mailto:alexsamara134@yandex.ru" method="post" encType="text/plain" className="space-y-6">
                <div>
                  <label className="block text-xs font-black text-slate-400 uppercase tracking-widest mb-2 ml-4">Ваше имя</label>
                  <input type="text" name="name" className="w-full h-16 rounded-2xl bg-slate-50 border-none px-6 font-bold focus:ring-2 focus:ring-purple-600 outline-none" placeholder="Иван Иванович" required />
                </div>
                <div>
                  <label className="block text-xs font-black text-slate-400 uppercase tracking-widest mb-2 ml-4">Телефон</label>
                  <input type="tel" name="phone" className="w-full h-16 rounded-2xl bg-slate-50 border-none px-6 font-bold focus:ring-2 focus:ring-purple-600 outline-none" placeholder="+7 (900) 000-00-00" required />
                </div>
                <Button size="lg" className="w-full h-16 rounded-2xl bg-purple-600 hover:bg-purple-700 text-white font-black text-lg shadow-xl">
                  Записаться
                </Button>
              </form>
            </motion.div>
          </motion.div>
        )}
      </AnimatePresence>
    </div>
  );
}
