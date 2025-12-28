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
  Ambulance
} from "lucide-react";
import { motion } from "framer-motion";
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
} from "@/components/ui/sheet";

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

export default function LandingPage() {
  return (
    <div className="min-h-screen bg-background text-foreground selection:bg-primary selection:text-primary-foreground">
      {/* BITRIX_BLOCK_HEADER */}
      <header className="fixed top-0 z-50 w-full border-b bg-background/80 backdrop-blur-md">
        <div className="container mx-auto flex h-16 items-center justify-between px-4">
          <div className="flex items-center gap-2">
            <div className="flex h-10 w-10 items-center justify-center rounded-lg bg-primary text-primary-foreground">
              <Heart className="h-6 w-6" />
            </div>
            <div className="flex flex-col">
              <span className="text-xl font-bold tracking-tight text-primary leading-none">Extramed-Psy</span>
              <span className="text-[10px] uppercase tracking-wider text-muted-foreground font-medium">Краснодар</span>
            </div>
          </div>
          
          <nav className="hidden lg:flex items-center gap-6">
            <a href="#conditions" className="text-sm font-medium hover:text-primary transition-colors">С чем работаем</a>
            <a href="#approach" className="text-sm font-medium hover:text-primary transition-colors">Наш подход</a>
            <a href="#prices" className="text-sm font-medium hover:text-primary transition-colors">Стоимость</a>
            <a href="#reviews" className="text-sm font-medium hover:text-primary transition-colors">Отзывы</a>
            <a href="/articles" className="text-sm font-bold text-primary hover:text-primary/80 transition-colors">Статьи</a>
            <a href="#contacts" className="text-sm font-medium hover:text-primary transition-colors">Контакты</a>
          </nav>

            <div className="flex items-center gap-4">
              <Button variant="outline" className="hidden sm:flex border-primary text-primary hover:bg-primary hover:text-primary-foreground font-semibold" asChild>
                <a href="tel:88612906619">
                  <Phone className="mr-2 h-4 w-4" />
                  8 (861) 290-66-19
                </a>
              </Button>
              
              <Sheet>
                <SheetTrigger asChild>
                  <Button variant="ghost" size="icon" className="lg:hidden">
                    <Menu className="h-6 w-6 text-primary" />
                  </Button>
                </SheetTrigger>
                <SheetContent side="right" className="w-[300px] sm:w-[400px]">
                  <SheetHeader>
                    <SheetTitle className="text-left text-primary font-bold">Меню</SheetTitle>
                  </SheetHeader>
                  <nav className="mt-8 flex flex-col gap-4">
                    <a href="#conditions" className="text-lg font-medium hover:text-primary transition-colors py-3 border-b">С чем работаем</a>
                    <a href="#approach" className="text-lg font-medium hover:text-primary transition-colors py-3 border-b">Наш подход</a>
                    <a href="#prices" className="text-lg font-medium hover:text-primary transition-colors py-3 border-b">Стоимость</a>
                    <a href="#reviews" className="text-lg font-medium hover:text-primary transition-colors py-3 border-b">Отзывы</a>
                    <a href="/articles" className="text-lg font-bold text-primary hover:text-primary/80 transition-colors py-3 border-b">Статьи</a>
                    <div className="mt-4 pt-4">
                      <p className="text-sm text-muted-foreground mb-4">Свяжитесь с нами:</p>
                      <div className="flex flex-col gap-3">
                        <Button className="w-full justify-start bg-primary text-primary-foreground font-bold py-6" asChild>
                          <a href="tel:88612906619">
                            <Phone className="mr-2 h-5 w-5" />
                            8 (861) 290-66-19
                          </a>
                        </Button>
                        <Button variant="outline" className="w-full justify-start border-[#25D366] text-[#25D366] hover:bg-[#25D366] hover:text-white font-bold py-6" asChild>
                          <a href="https://wa.me/79282579115" target="_blank" rel="noopener noreferrer">
                            <MessageSquare className="mr-2 h-5 w-5" />
                            WhatsApp
                          </a>
                        </Button>
                        <Button variant="outline" className="w-full justify-start border-[#229ED9] text-[#229ED9] hover:bg-[#229ED9] hover:text-white font-bold py-6" asChild>
                          <a href="https://t.me/ExtraMed93" target="_blank" rel="noopener noreferrer">
                            <Send className="mr-2 h-5 w-5" />
                            Telegram
                          </a>
                        </Button>
                      </div>
                    </div>
                  </nav>
                </SheetContent>
              </Sheet>
            </div>
        </div>
      </header>

      {/* Floating Action Button for Mobile */}
      <div className="fixed bottom-6 right-6 z-40 md:hidden flex flex-col gap-3">
        <a href="https://wa.me/79282579115" target="_blank" rel="noopener noreferrer">
          <Button size="lg" className="h-14 w-14 rounded-full bg-[#25D366] text-white shadow-2xl border-4 border-white">
            <MessageSquare className="h-6 w-6" />
          </Button>
        </a>
        <a href="tel:88612906619">
          <Button size="lg" className="h-14 w-14 rounded-full bg-primary text-primary-foreground shadow-2xl animate-pulse border-4 border-white">
            <Phone className="h-6 w-6" />
          </Button>
        </a>
      </div>

      <main className="pt-16">
        {/* SECTION 1: HERO */}
        {/* BITRIX_BLOCK_HERO */}
        <section id="hero" className="relative overflow-hidden py-12 lg:py-24">
          <div className="container mx-auto px-4">
            <div className="grid gap-12 lg:grid-cols-2 lg:items-center">
              <motion.div 
                initial="initial"
                animate="animate"
                variants={stagger}
                className="flex flex-col gap-6 text-center lg:text-left"
              >
                <motion.div variants={fadeIn}>
                  <Badge variant="secondary" className="mb-4 bg-primary/10 text-primary px-4 py-1.5 text-sm font-semibold flex w-fit mx-auto lg:mx-0 items-center gap-2">
                    <MapPin className="h-4 w-4" /> г. Краснодар, ул. Лизы Чайкиной
                  </Badge>
                  <h1 className="text-3xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl text-primary leading-[1.1] mb-6">
                    Пансионат для пожилых в Краснодаре: профессиональный уход и безопасность
                  </h1>
                </motion.div>
                <motion.p variants={fadeIn} className="text-base sm:text-lg lg:text-xl text-muted-foreground max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                  Ваш близкий в надежных руках. Мы не просто обеспечиваем проживание — мы возвращаем качество жизни, спокойствие для семьи и профессиональную помощь при самых сложных диагнозах. Круглосуточно, с заботой и по медицинским стандартам.
                </motion.p>
                <motion.div variants={fadeIn} className="flex flex-col sm:flex-row justify-center lg:justify-start gap-4 mt-4">
                  <Button size="lg" className="rounded-full px-10 bg-primary hover:bg-primary/90 text-primary-foreground shadow-xl shadow-primary/20 h-14 text-base font-bold">
                    Получить консультацию врача
                  </Button>
                  <Button size="lg" variant="outline" className="rounded-full px-10 border-primary text-primary hover:bg-primary/5 h-14 text-base font-bold flex gap-2">
                    <Video className="h-5 w-5" /> Записаться на онлайн-экскурсию
                  </Button>
                </motion.div>
              </motion.div>
              <motion.div 
                initial={{ opacity: 0, scale: 0.95 }}
                animate={{ opacity: 1, scale: 1 }}
                transition={{ duration: 0.8 }}
                className="relative aspect-video lg:aspect-square rounded-[2rem] overflow-hidden shadow-2xl border-8 border-white"
              >
                <Image 
                  src="https://slelguoygbfzlpylpxfs.supabase.co/storage/v1/render/image/public/document-uploads/XXXL-1766923019989.webp" 
                  alt="Пансионат Extramed-Psy"
                  fill
                  className="object-cover"
                  priority
                />
                <div className="absolute inset-0 bg-gradient-to-t from-primary/30 via-transparent to-transparent" />
              </motion.div>
            </div>
          </div>
          <div className="absolute -z-10 top-0 right-0 w-1/3 h-1/3 bg-primary/5 blur-[120px] rounded-full translate-x-1/2 -translate-y-1/2" />
        </section>

        {/* SECTION 2: CONDITIONS */}
        {/* BITRIX_BLOCK_CONDITIONS */}
        <section id="conditions" className="bg-secondary/20 py-16 lg:py-24 border-y">
          <div className="container mx-auto px-4">
            <div className="mb-12 lg:mb-20 text-center">
              <h2 className="mb-6 text-3xl font-bold tracking-tight text-primary sm:text-5xl">
                Специализируемся на сложных возрастных заболеваниях. Мы знаем, как помочь
              </h2>
              <p className="mx-auto max-w-3xl text-base sm:text-xl text-muted-foreground leading-relaxed">
                Мы глубоко понимаем специфику заболеваний, которые требуют не просто ухода, а особых знаний и терпения. Наша команда имеет успешный опыт работы с пациентами, состояние которых часто называют «трудным».
              </p>
            </div>

            <div className="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
              {/* Category 1 */}
              <Card className="border-none shadow-xl bg-card hover:shadow-2xl transition-all group overflow-hidden">
                <div className="h-2 bg-primary group-hover:h-3 transition-all" />
                <CardHeader>
                  <div className="mb-4 flex h-14 w-14 items-center justify-center rounded-2xl bg-primary/10 text-primary group-hover:scale-110 transition-transform">
                    <Brain className="h-8 w-8" />
                  </div>
                  <CardTitle className="text-xl sm:text-2xl">Неврологические заболевания</CardTitle>
                </CardHeader>
                <CardContent>
                  <ul className="space-y-4 text-muted-foreground">
                    <li className="flex items-start gap-3"><CheckCircle2 className="h-5 w-5 text-primary shrink-0 mt-0.5" /> <span>Деменция и болезнь Альцгеймера</span></li>
                    <li className="flex items-start gap-3"><CheckCircle2 className="h-5 w-5 text-primary shrink-0 mt-0.5" /> <span>Болезнь Паркинсона</span></li>
                    <li className="flex items-start gap-3"><CheckCircle2 className="h-5 w-5 text-primary shrink-0 mt-0.5" /> <span>Рассеянный склероз</span></li>
                    <li className="flex items-start gap-3"><CheckCircle2 className="h-5 w-5 text-primary shrink-0 mt-0.5" /> <span>Последствия инсульта</span></li>
                  </ul>
                </CardContent>
              </Card>

              {/* Category 2 */}
              <Card className="border-none shadow-xl bg-card hover:shadow-2xl transition-all group overflow-hidden">
                <div className="h-2 bg-primary group-hover:h-3 transition-all" />
                <CardHeader>
                  <div className="mb-4 flex h-14 w-14 items-center justify-center rounded-2xl bg-primary/10 text-primary group-hover:scale-110 transition-transform">
                    <Activity className="h-8 w-8" />
                  </div>
                  <CardTitle className="text-xl sm:text-2xl">Реабилитация</CardTitle>
                </CardHeader>
                <CardContent>
                  <ul className="space-y-4 text-muted-foreground">
                    <li className="flex items-start gap-3"><CheckCircle2 className="h-5 w-5 text-primary shrink-0 mt-0.5" /> <span>Реабилитация после инфаркта</span></li>
                    <li className="flex items-start gap-3"><CheckCircle2 className="h-5 w-5 text-primary shrink-0 mt-0.5" /> <span>Восстановление после переломов (шейки бедра)</span></li>
                    <li className="flex items-start gap-3"><CheckCircle2 className="h-5 w-5 text-primary shrink-0 mt-0.5" /> <span>Уход за лежачими больными</span></li>
                    <li className="flex items-start gap-3"><CheckCircle2 className="h-5 w-5 text-primary shrink-0 mt-0.5" /> <span>Постоперационная реабилитация</span></li>
                  </ul>
                </CardContent>
              </Card>

              {/* Category 3 */}
              <Card className="border-none shadow-xl bg-card hover:shadow-2xl transition-all group overflow-hidden">
                <div className="h-2 bg-primary group-hover:h-3 transition-all" />
                <CardHeader>
                  <div className="mb-4 flex h-14 w-14 items-center justify-center rounded-2xl bg-primary/10 text-primary group-hover:scale-110 transition-transform">
                    <Stethoscope className="h-8 w-8" />
                  </div>
                  <CardTitle className="text-xl sm:text-2xl">Хронические заболевания</CardTitle>
                </CardHeader>
                <CardContent>
                  <ul className="space-y-4 text-muted-foreground">
                    <li className="flex items-start gap-3"><CheckCircle2 className="h-5 w-5 text-primary shrink-0 mt-0.5" /> <span>Сахарный диабет</span></li>
                    <li className="flex items-start gap-3"><CheckCircle2 className="h-5 w-5 text-primary shrink-0 mt-0.5" /> <span>Гипертония и сердечная недостаточность</span></li>
                    <li className="flex items-start gap-3"><CheckCircle2 className="h-5 w-5 text-primary shrink-0 mt-0.5" /> <span>Онкология (паллиативный уход)</span></li>
                    <li className="flex items-start gap-3"><CheckCircle2 className="h-5 w-5 text-primary shrink-0 mt-0.5" /> <span>Артрит и артроз</span></li>
                  </ul>
                </CardContent>
              </Card>
            </div>

            <motion.div 
              whileInView={{ scale: [1, 1.02, 1] }}
              className="mt-16 rounded-[2rem] bg-gradient-to-br from-primary to-primary/80 p-8 sm:p-12 text-center text-primary-foreground shadow-2xl"
            >
              <h3 className="text-xl sm:text-2xl font-bold mb-4">Ваш случай не в списке? Не отчаивайтесь!</h3>
              <p className="mb-8 text-base sm:text-lg opacity-90 max-w-2xl mx-auto">Наши врачи специализируются на комплексных решениях. Проконсультируйтесь с гериатром бесплатно.</p>
              <Button size="lg" variant="secondary" className="rounded-full px-12 h-14 text-primary font-bold hover:bg-white shadow-lg">
                Бесплатная консультация
              </Button>
            </motion.div>
          </div>
        </section>

        {/* PHOTO GALLERY */}
        {/* BITRIX_BLOCK_GALLERY */}
        <section className="py-16 lg:py-24 overflow-hidden">
          <div className="container mx-auto px-4">
            <h2 className="text-center mb-12 text-3xl font-bold text-primary">Фотографии нашего пансионата</h2>
            <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
              <div className="relative aspect-[4/3] rounded-3xl overflow-hidden shadow-lg group">
                <Image src="https://slelguoygbfzlpylpxfs.supabase.co/storage/v1/render/image/public/document-uploads/XXXL-5-1766923019988.webp" alt="Зона отдыха" fill className="object-cover group-hover:scale-110 transition-transform duration-500" />
                <div className="absolute bottom-4 left-4"><Badge className="bg-black/50 backdrop-blur-sm border-none">Зона отдыха</Badge></div>
              </div>
              <div className="relative aspect-[4/3] rounded-3xl overflow-hidden shadow-lg group">
                <Image src="https://slelguoygbfzlpylpxfs.supabase.co/storage/v1/render/image/public/document-uploads/XXXL-6-1766923019939.webp" alt="Интерьер" fill className="object-cover group-hover:scale-110 transition-transform duration-500" />
                <div className="absolute bottom-4 left-4"><Badge className="bg-black/50 backdrop-blur-sm border-none">Наши коридоры</Badge></div>
              </div>
              <div className="relative aspect-[4/3] rounded-3xl overflow-hidden shadow-lg group">
                <Image src="https://slelguoygbfzlpylpxfs.supabase.co/storage/v1/render/image/public/document-uploads/XXXL-7-1766923019991.webp" alt="Комната проживания" fill className="object-cover group-hover:scale-110 transition-transform duration-500" />
                <div className="absolute bottom-4 left-4"><Badge className="bg-black/50 backdrop-blur-sm border-none">Уютные номера</Badge></div>
              </div>
              <div className="relative aspect-[4/3] rounded-3xl overflow-hidden shadow-lg group">
                <Image src="https://images.unsplash.com/photo-1586773860418-d37222d8fce3?auto=format&fit=crop&q=80" alt="Территория" fill className="object-cover group-hover:scale-110 transition-transform duration-500" />
                <div className="absolute bottom-4 left-4"><Badge className="bg-black/50 backdrop-blur-sm border-none">Столовая</Badge></div>
              </div>
            </div>
          </div>
        </section>

        {/* SECTION 3: APPROACH */}
        {/* BITRIX_BLOCK_APPROACH */}
        <section id="approach" className="py-16 lg:py-24 bg-primary/5">
          <div className="container mx-auto px-4">
            <div className="mb-16 text-center">
              <h2 className="mb-6 text-3xl font-bold tracking-tight text-primary sm:text-5xl">
                Наш комплексный подход
              </h2>
              <p className="mx-auto max-w-3xl text-base sm:text-xl text-muted-foreground italic">
                «Мы заменили разрозненные услуги единой системой care, где медицинская помощь неотделима от человеческого тепла и создания комфортной среды.»
              </p>
            </div>

            <div className="grid gap-10 lg:grid-cols-3">
              {/* Column 1 */}
              <div className="flex flex-col gap-6 p-8 rounded-[2.5rem] bg-white shadow-xl border border-primary/5">
                <div className="h-14 w-14 rounded-full bg-primary/10 flex items-center justify-center text-primary mb-2">
                  <Stethoscope className="h-7 w-7" />
                </div>
                <h3 className="text-2xl font-bold text-primary">Медицинский уход 24/7</h3>
                <ul className="space-y-4 text-muted-foreground">
                  <li className="flex items-start gap-3">
                    <CheckCircle2 className="h-5 w-5 text-primary shrink-0 mt-0.5" />
                    <span className="text-base">Контроль здоровья: давление, сахар, прием препаратов.</span>
                  </li>
                  <li className="flex items-start gap-3">
                    <CheckCircle2 className="h-5 w-5 text-primary shrink-0 mt-0.5" />
                    <span className="text-base">Профилактика и лечение пролежней.</span>
                  </li>
                  <li className="flex items-start gap-3">
                    <CheckCircle2 className="h-5 w-5 text-primary shrink-0 mt-0.5" />
                    <span className="text-base">Квалифицированные сиделки с мед. образованием.</span>
                  </li>
                  <li className="flex items-start gap-3">
                    <CheckCircle2 className="h-5 w-5 text-primary shrink-0 mt-0.5" />
                    <span className="text-base">Уход за стомами, катетерами, гастростомами.</span>
                  </li>
                </ul>
              </div>

              {/* Column 2 */}
              <div className="flex flex-col gap-6 p-8 rounded-[2.5rem] bg-white shadow-xl border border-primary/5">
                <div className="h-14 w-14 rounded-full bg-primary/10 flex items-center justify-center text-primary mb-2">
                  <Activity className="h-7 w-7" />
                </div>
                <h3 className="text-2xl font-bold text-primary">Активная реабилитация</h3>
                <ul className="space-y-4 text-muted-foreground">
                  <li className="flex items-start gap-3">
                    <CheckCircle2 className="h-5 w-5 text-primary shrink-0 mt-0.5" />
                    <span className="text-base">Индивидуальные занятия ЛФК и лечебной гимнастикой.</span>
                  </li>
                  <li className="flex items-start gap-3">
                    <CheckCircle2 className="h-5 w-5 text-primary shrink-0 mt-0.5" />
                    <span className="text-base">Восстановительный и оздоровительный массаж.</span>
                  </li>
                  <li className="flex items-start gap-3">
                    <CheckCircle2 className="h-5 w-5 text-primary shrink-0 mt-0.5" />
                    <span className="text-base">Работа с логопедом и нейропсихологом.</span>
                  </li>
                  <li className="flex items-start gap-3">
                    <CheckCircle2 className="h-5 w-5 text-primary shrink-0 mt-0.5" />
                    <span className="text-base">Занятия по поддержанию когнитивных функций.</span>
                  </li>
                </ul>
              </div>

              {/* Column 3 */}
              <div className="flex flex-col gap-6 p-8 rounded-[2.5rem] bg-white shadow-xl border border-primary/5">
                <div className="h-14 w-14 rounded-full bg-primary/10 flex items-center justify-center text-primary mb-2">
                  <ShieldCheck className="h-7 w-7" />
                </div>
                <h3 className="text-2xl font-bold text-primary">Безопасность и достоинство</h3>
                <ul className="space-y-4 text-muted-foreground">
                  <li className="flex items-start gap-3">
                    <CheckCircle2 className="h-5 w-5 text-primary shrink-0 mt-0.5" />
                    <span className="text-base">Специализированное питание по назначению врача.</span>
                  </li>
                  <li className="flex items-start gap-3">
                    <CheckCircle2 className="h-5 w-5 text-primary shrink-0 mt-0.5" />
                    <span className="text-base">Организованный досуг и социализация.</span>
                  </li>
                  <li className="flex items-start gap-3">
                    <CheckCircle2 className="h-5 w-5 text-primary shrink-0 mt-0.5" />
                    <span className="text-base">Адаптированная среда для маломобильных.</span>
                  </li>
                  <li className="flex items-start gap-3">
                    <CheckCircle2 className="h-5 w-5 text-primary shrink-0 mt-0.5" />
                    <span className="text-base">Психологическая поддержка для семей.</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>

        {/* PRICING TABLE */}
        {/* BITRIX_BLOCK_PRICES */}
        <section id="prices" className="py-16 lg:py-24">
          <div className="container mx-auto px-4">
            <div className="mb-12 text-center">
              <h2 className="text-3xl font-bold tracking-tight text-primary sm:text-4xl">Прозрачная стоимость услуг</h2>
              <p className="mt-4 text-muted-foreground">Никаких скрытых платежей. Все цены зафиксированы в договоре.</p>
            </div>
            <div className="overflow-hidden rounded-[2rem] border bg-card shadow-2xl">
              <div className="overflow-x-auto scrollbar-hide">
                <Table className="min-w-[700px]">
                  <TableHeader className="bg-primary/5">
                    <TableRow>
                      <TableHead className="py-8 px-10 text-xl font-bold text-primary">Наименование услуги</TableHead>
                      <TableHead className="py-8 px-10 text-right text-xl font-bold text-primary">Стоимость</TableHead>
                    </TableRow>
                  </TableHeader>
                  <TableBody>
                    {[
                      { name: "Первичная консультация по телефону", price: "бесплатно" },
                      { name: "Размещение в пансионате", price: "от 1750 ₽ / сут" },
                      { name: "Реабилитация", price: "от 2000 ₽ / сут" },
                      { name: "Вызов психиатра на дом", price: "от 3000 ₽" },
                      { name: "Вызов терапевта на дом", price: "от 3000 ₽" },
                      { name: "Вызов невролога на дом", price: "от 3000 ₽" },
                      { name: "Перевозка больных в пансионат", price: "от 2000 ₽" },
                    ].map((item, i) => (
                      <TableRow key={i} className="hover:bg-primary/5 transition-colors">
                        <TableCell className="py-6 px-10 font-semibold text-lg">{item.name}</TableCell>
                        <TableCell className="py-6 px-10 text-right text-primary font-extrabold text-xl">{item.price}</TableCell>
                      </TableRow>
                    ))}
                  </TableBody>
                </Table>
              </div>
            </div>
          </div>
        </section>

        {/* SECTION 4: WHY TRUST US */}
        {/* BITRIX_BLOCK_WHY_US */}
        <section className="py-16 lg:py-24 bg-secondary/10">
          <div className="container mx-auto px-4">
            <h2 className="mb-16 text-3xl font-bold tracking-tight text-primary text-center sm:text-5xl">
              Спокойствие вашей семьи — наш главный приоритет
            </h2>
            <div className="grid gap-12 sm:grid-cols-2 lg:grid-cols-4">
              {[
                {
                  icon: <ShieldCheck className="h-8 w-8" />,
                  title: "Безопасность 24/7",
                  text: "Видеонаблюдение, тревожные кнопки, дежурная медсестра у постели больного."
                },
                {
                  icon: <MessageSquare className="h-8 w-8" />,
                  title: "Полная прозрачность",
                  text: "Ежедневные отчеты в удобном мессенджере (фото, видео). Открытые двери для посещений."
                },
                {
                  icon: <Users className="h-8 w-8" />,
                  title: "Команда экспертов",
                  text: "Врачи-гериатры, неврологи, реабилитологи, психологи. Мы действуем как единая команда."
                },
                {
                  icon: <FileText className="h-8 w-8" />,
                  title: "Медицинская лицензия",
                  text: "Наша деятельность официально лицензирована. Гарантия качества и законности."
                }
              ].map((item, i) => (
                <div key={i} className="flex flex-col gap-6 text-center items-center group">
                  <div className="flex h-20 w-20 items-center justify-center rounded-[2rem] bg-primary text-primary-foreground shadow-xl shadow-primary/20 transition-all group-hover:rotate-6 group-hover:scale-110">
                    {item.icon}
                  </div>
                  <h3 className="text-xl font-bold text-primary">{item.title}</h3>
                  <p className="text-muted-foreground leading-relaxed px-2">{item.text}</p>
                </div>
              ))}
            </div>
          </div>
        </section>

        {/* SECTION 5: REVIEWS */}
        {/* BITRIX_BLOCK_REVIEWS */}
        <section id="reviews" className="bg-white py-16 lg:py-24">
          <div className="container mx-auto px-4">
            <h2 className="mb-16 text-3xl font-bold tracking-tight text-primary text-center sm:text-5xl">
              Истории семей, которые обрели спокойствие
            </h2>
            <div className="mx-auto max-w-4xl">
              <Card className="border-none shadow-2xl p-8 sm:p-16 bg-primary/5 relative overflow-hidden rounded-[3rem]">
                <Star className="absolute top-10 right-10 h-32 w-32 text-primary/10 rotate-12" />
                <blockquote className="relative z-10 space-y-8">
                  <div className="flex justify-center sm:justify-start gap-1.5 text-primary">
                    {[1, 2, 3, 4, 5].map((s) => <Star key={s} className="h-6 w-6 fill-current" />)}
                  </div>
                  <p className="text-xl sm:text-2xl italic leading-relaxed text-primary font-medium">
                    «После того как у отца диагностировали болезнь Паркинсона, мы не справлялись. Он стал апатичным, падал. В Extramed-Psy к нему вернулся интерес к жизни. С ним не просто гуляют и кормят — с ним занимается инструктор ЛФК, чтобы сохранить подвижность, и психолог. Мы видим, как он тянется к общению. Спасибо за ваш труд и понимание!»
                  </p>
                  <footer className="flex items-center gap-6 pt-8 border-t border-primary/10">
                    <div className="h-16 w-16 rounded-full bg-primary flex items-center justify-center text-primary-foreground text-xl font-bold">СИ</div>
                    <div>
                      <div className="text-xl font-bold text-primary">Семья Ивановых</div>
                      <div className="text-base text-muted-foreground">г. Краснодар</div>
                    </div>
                  </footer>
                </blockquote>
              </Card>
            </div>
          </div>
        </section>

        {/* SECTION 6: HOW WE WORK */}
        {/* BITRIX_BLOCK_STEPS */}
        <section className="py-16 lg:py-24 bg-background border-t">
          <div className="container mx-auto px-4">
            <h2 className="mb-20 text-3xl font-bold tracking-tight text-primary text-center sm:text-5xl">
              Всего 3 шага до уверенности в завтрашнем дне
            </h2>
            <div className="grid gap-12 lg:grid-cols-3 relative">
              <div className="hidden lg:block absolute top-12 left-1/4 right-1/4 h-1 bg-primary/10 rounded-full" />
              {[
                { 
                  step: "1", 
                  title: "Знакомство и диагностика", 
                  text: "Вы звоните или оставляете заявку. Наш врач бесплатно консультирует и дистанционно оценивает состояние вашего близкого." 
                },
                { 
                  step: "2", 
                  title: "Подбор программы и знакомство", 
                  text: "Мы подбираем индивидуальную программу ухода и приглашаем на очную или онлайн-экскурсию по пансионату." 
                },
                { 
                  step: "3", 
                  title: "Комфортное заселение", 
                  text: "Помогаем с организацией безопасной перевозки и адаптацией нового резидента, чтобы он почувствовал себя как дома." 
                }
              ].map((item, i) => (
                <div key={i} className="flex flex-col items-center text-center gap-8 relative z-10 group">
                  <div className="h-20 w-20 rounded-[2rem] bg-primary flex items-center justify-center text-3xl font-black text-primary-foreground shadow-2xl shadow-primary/30 group-hover:scale-110 group-hover:rotate-3 transition-all">
                    {item.step}
                  </div>
                  <div className="space-y-4">
                    <h3 className="text-2xl font-bold text-primary">{item.title}</h3>
                    <p className="text-base sm:text-lg text-muted-foreground leading-relaxed">{item.text}</p>
                  </div>
                </div>
              ))}
            </div>
          </div>
        </section>

        {/* SECTION 7: FINAL CTA */}
        {/* BITRIX_BLOCK_CTA */}
        <section id="contacts" className="bg-primary py-20 sm:py-32 text-primary-foreground overflow-hidden relative">
          <div className="container mx-auto px-4 text-center relative z-10">
            <h2 className="mb-8 text-3xl font-extrabold tracking-tight sm:text-6xl leading-tight">
              Время — самый ценный ресурс. <br className="hidden sm:block" /> Не теряйте его в сомнениях.
            </h2>
            <p className="mx-auto mb-12 max-w-3xl text-lg sm:text-2xl opacity-90 leading-relaxed font-medium">
              Позвоните по номеру <span className="underline underline-offset-8 decoration-white/30">8 (861) 290-66-19</span> прямо сейчас, чтобы получить ответы на все вопросы, узнать о свободных местах и стоимости проживания. Позаботьтесь о своем близком с профессионалами.
            </p>
            <div className="flex flex-col sm:flex-row justify-center gap-6">
              <a href="tel:88612906619" className="w-full sm:w-auto">
                <Button size="lg" variant="secondary" className="rounded-full w-full px-12 h-20 text-xl font-black hover:scale-105 transition-transform shadow-[0_20px_50_rgba(0,0,0,0.2)] text-primary">
                  <Phone className="mr-4 h-7 w-7" />
                  8 (861) 290-66-19
                </Button>
              </a>
              <a href="https://wa.me/79282579115" target="_blank" rel="noopener noreferrer" className="w-full sm:w-auto">
                <Button size="lg" variant="outline" className="rounded-full w-full px-12 h-20 text-xl font-bold border-white/20 hover:bg-white/10 text-white">
                  <MessageSquare className="mr-4 h-7 w-7" />
                  Написать в WhatsApp
                </Button>
              </a>
            </div>
          </div>
          <div className="absolute top-0 left-0 w-[40rem] h-[40rem] bg-white/5 blur-[150px] rounded-full -translate-x-1/2 -translate-y-1/2" />
          <div className="absolute bottom-0 right-0 w-[50rem] h-[50rem] bg-black/10 blur-[180px] rounded-full translate-x-1/4 translate-y-1/4" />
        </section>
      </main>

      {/* BITRIX_BLOCK_FOOTER */}
      <footer className="border-t py-16 bg-secondary/20">
        <div className="container mx-auto px-4">
          <div className="grid gap-12 lg:grid-cols-4 mb-12">
            <div className="lg:col-span-2">
              <div className="flex items-center gap-2 mb-6">
                <Heart className="h-8 w-8 text-primary" />
                <span className="text-2xl font-bold text-primary uppercase tracking-tighter">Extramed-Psy</span>
              </div>
              <p className="text-muted-foreground text-lg max-w-md">
                Профессиональный уход за пожилыми людьми в Краснодаре. Медицинские стандарты, домашний уют и экспертная помощь.
              </p>
            </div>
            <div>
              <h4 className="font-bold text-primary mb-6 text-lg">Навигация</h4>
              <ul className="space-y-4 text-muted-foreground">
                <li><a href="#hero" className="hover:text-primary transition-colors">Главная</a></li>
                <li><a href="/articles" className="hover:text-primary transition-colors font-bold">Статьи</a></li>
                <li><a href="#conditions" className="hover:text-primary transition-colors">Заболевания</a></li>
                <li><a href="#approach" className="hover:text-primary transition-colors">Наш подход</a></li>
                <li><a href="#prices" className="hover:text-primary transition-colors">Стоимость</a></li>
              </ul>
            </div>
            <div>
              <h4 className="font-bold text-primary mb-6 text-lg">Контакты</h4>
              <ul className="space-y-4 text-muted-foreground">
                <li className="flex items-center gap-2"><MapPin className="h-5 w-5 text-primary" /> г. Краснодар, ул. Лизы Чайкиной</li>
                <li className="flex items-center gap-2 font-bold text-primary"><Phone className="h-5 w-5" /> +7 (861) 000-00-00</li>
                <li className="text-sm">Круглосуточно без выходных</li>
              </ul>
            </div>
          </div>
          <div className="border-t pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-muted-foreground">
            <p>© 2024 Extramed-Psy. Все права защищены. Информация на сайте не является публичной офертой.</p>
            <div className="flex gap-6">
              <a href="#" className="underline">Политика конфиденциальности</a>
            </div>
          </div>
        </div>
      </footer>
    </div>
  );
}

