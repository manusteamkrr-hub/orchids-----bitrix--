"use client";

import React from "react";
import Image from "next/image";
import { 
  Heart, 
  Activity, 
  ShieldCheck, 
  MessageSquare, 
  Clock, 
  Phone, 
  ChevronRight, 
  Star, 
  CheckCircle2, 
  Users,
  Ambulance,
  Stethoscope,
  Brain,
  Bone,
  FlameKindling,
  Menu
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
      {/* Navigation */}
      <header className="fixed top-0 z-50 w-full border-b bg-background/80 backdrop-blur-md">
        <div className="container mx-auto flex h-16 items-center justify-between px-4">
          <div className="flex items-center gap-2">
            <div className="flex h-10 w-10 items-center justify-center rounded-lg bg-primary text-primary-foreground">
              <Heart className="h-6 w-6" />
            </div>
            <span className="text-xl font-bold tracking-tight text-primary">Extramed-Psy</span>
          </div>
          
          <nav className="hidden md:flex items-center gap-6">
            <a href="#services" className="text-sm font-medium hover:text-primary transition-colors">Услуги</a>
            <a href="#approach" className="text-sm font-medium hover:text-primary transition-colors">Подход</a>
            <a href="#prices" className="text-sm font-medium hover:text-primary transition-colors">Цены</a>
            <a href="#reviews" className="text-sm font-medium hover:text-primary transition-colors">Отзывы</a>
          </nav>

          <div className="flex items-center gap-4">
            <Button variant="outline" className="hidden sm:flex border-primary text-primary hover:bg-primary hover:text-primary-foreground">
              <Phone className="mr-2 h-4 w-4" />
              +7 (861) 000-00-00
            </Button>
            
            <Sheet>
              <SheetTrigger asChild>
                <Button variant="ghost" size="icon" className="md:hidden">
                  <Menu className="h-6 w-6 text-primary" />
                </Button>
              </SheetTrigger>
              <SheetContent side="right" className="w-[300px] sm:w-[400px]">
                <SheetHeader>
                  <SheetTitle className="text-left text-primary">Меню</SheetTitle>
                </SheetHeader>
                <nav className="mt-8 flex flex-col gap-4">
                  <a href="#services" className="text-lg font-medium hover:text-primary transition-colors py-2 border-b">Услуги</a>
                  <a href="#approach" className="text-lg font-medium hover:text-primary transition-colors py-2 border-b">Подход</a>
                  <a href="#prices" className="text-lg font-medium hover:text-primary transition-colors py-2 border-b">Цены</a>
                  <a href="#reviews" className="text-lg font-medium hover:text-primary transition-colors py-2 border-b">Отзывы</a>
                  <div className="mt-4 pt-4">
                    <p className="text-sm text-muted-foreground mb-4">Свяжитесь с нами:</p>
                    <Button className="w-full justify-start bg-primary text-primary-foreground">
                      <Phone className="mr-2 h-4 w-4" />
                      +7 (861) 000-00-00
                    </Button>
                  </div>
                </nav>
              </SheetContent>
            </Sheet>
          </div>
        </div>
      </header>

      {/* Floating Action Button for Mobile */}
      <div className="fixed bottom-6 right-6 z-40 md:hidden">
        <Button size="lg" className="h-14 w-14 rounded-full bg-primary text-primary-foreground shadow-2xl animate-bounce">
          <Phone className="h-6 w-6" />
        </Button>
      </div>

      <main className="pt-16">
        {/* Hero Section */}
        <section className="relative overflow-hidden py-12 lg:py-32">
          <div className="container mx-auto px-4">
            <div className="grid gap-12 lg:grid-cols-2 lg:items-center">
              <motion.div 
                initial="initial"
                animate="animate"
                variants={stagger}
                className="flex flex-col gap-6 text-center lg:text-left"
              >
                <motion.div variants={fadeIn}>
                  <Badge variant="secondary" className="mb-4 bg-primary/10 text-primary px-3 py-1">г. Краснодар, ул. Лизы Чайкиной</Badge>
                  <h1 className="text-3xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl text-primary leading-tight">
                    Пансионат для пожилых: профессиональный уход и безопасность
                  </h1>
                </motion.div>
                <motion.p variants={fadeIn} className="text-base sm:text-lg text-muted-foreground max-w-2xl mx-auto lg:mx-0">
                  Ваш близкий в надежных руках. Мы не просто обеспечиваем проживание — мы возвращаем качество жизни, спокойствие для семьи и профессиональную помощь при самых сложных диагнозах.
                </motion.p>
                <motion.div variants={fadeIn} className="flex flex-col sm:flex-row justify-center lg:justify-start gap-4">
                  <Button size="lg" className="rounded-full px-8 bg-primary hover:bg-primary/90 text-primary-foreground shadow-lg shadow-primary/20 w-full sm:w-auto">
                    Получить консультацию врача
                  </Button>
                  <Button size="lg" variant="outline" className="rounded-full px-8 border-primary text-primary hover:bg-primary/5 w-full sm:w-auto">
                    Записаться на онлайн-экскурсию
                  </Button>
                </motion.div>
              </motion.div>
              <motion.div 
                initial={{ opacity: 0, scale: 0.8 }}
                animate={{ opacity: 1, scale: 1 }}
                transition={{ duration: 0.8 }}
                className="relative aspect-[4/3] sm:aspect-video lg:aspect-square rounded-3xl overflow-hidden shadow-2xl"
              >
                <Image 
                  src="https://images.unsplash.com/photo-1576091160550-2173dad99a01?auto=format&fit=crop&q=80" 
                  alt="Nursing Home"
                  fill
                  className="object-cover"
                  priority
                />
                <div className="absolute inset-0 bg-gradient-to-t from-primary/20 to-transparent" />
              </motion.div>
            </div>
          </div>
          <div className="absolute -z-10 top-0 right-0 w-1/3 h-1/3 bg-primary/5 blur-3xl rounded-full translate-x-1/2 -translate-y-1/2" />
        </section>

        {/* Conditions Section */}
        <section id="services" className="bg-secondary/30 py-16 lg:py-24">
          <div className="container mx-auto px-4">
            <div className="mb-12 lg:mb-16 text-center">
              <h2 className="mb-4 text-2xl font-bold tracking-tight text-primary sm:text-4xl px-2">
                Специализируемся на сложных возрастных заболеваниях
              </h2>
              <p className="mx-auto max-w-3xl text-base sm:text-lg text-muted-foreground">
                Мы глубоко понимаем специфику заболеваний, которые требуют не просто ухода, а особых знаний и терпения.
              </p>
            </div>

            <div className="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
              <Card className="border-none shadow-xl bg-card transition-all hover:-translate-y-1">
                <CardHeader>
                  <div className="mb-4 flex h-12 w-12 items-center justify-center rounded-2xl bg-primary/10 text-primary">
                    <Brain className="h-6 w-6" />
                  </div>
                  <CardTitle className="text-xl">Неврологические заболевания</CardTitle>
                </CardHeader>
                <CardContent>
                  <ul className="space-y-3 text-muted-foreground">
                    <li className="flex items-start gap-2 text-sm"><CheckCircle2 className="h-4 w-4 text-primary shrink-0 mt-0.5" /> <span>Деменция и болезнь Альцгеймера</span></li>
                    <li className="flex items-start gap-2 text-sm"><CheckCircle2 className="h-4 w-4 text-primary shrink-0 mt-0.5" /> <span>Болезнь Паркинсона</span></li>
                    <li className="flex items-start gap-2 text-sm"><CheckCircle2 className="h-4 w-4 text-primary shrink-0 mt-0.5" /> <span>Рассеянный склероз</span></li>
                    <li className="flex items-start gap-2 text-sm"><CheckCircle2 className="h-4 w-4 text-primary shrink-0 mt-0.5" /> <span>Последствия инсульта</span></li>
                  </ul>
                </CardContent>
              </Card>

              <Card className="border-none shadow-xl bg-card transition-all hover:-translate-y-1">
                <CardHeader>
                  <div className="mb-4 flex h-12 w-12 items-center justify-center rounded-2xl bg-primary/10 text-primary">
                    <Activity className="h-6 w-6" />
                  </div>
                  <CardTitle className="text-xl">Реабилитация</CardTitle>
                </CardHeader>
                <CardContent>
                  <ul className="space-y-3 text-muted-foreground">
                    <li className="flex items-start gap-2 text-sm"><CheckCircle2 className="h-4 w-4 text-primary shrink-0 mt-0.5" /> <span>Реабилитация после инфаркта</span></li>
                    <li className="flex items-start gap-2 text-sm"><CheckCircle2 className="h-4 w-4 text-primary shrink-0 mt-0.5" /> <span>Восстановление после переломов</span></li>
                    <li className="flex items-start gap-2 text-sm"><CheckCircle2 className="h-4 w-4 text-primary shrink-0 mt-0.5" /> <span>Уход за лежачими больными</span></li>
                    <li className="flex items-start gap-2 text-sm"><CheckCircle2 className="h-4 w-4 text-primary shrink-0 mt-0.5" /> <span>Постоперационная реабилитация</span></li>
                  </ul>
                </CardContent>
              </Card>

              <Card className="border-none shadow-xl bg-card transition-all hover:-translate-y-1">
                <CardHeader>
                  <div className="mb-4 flex h-12 w-12 items-center justify-center rounded-2xl bg-primary/10 text-primary">
                    <Stethoscope className="h-6 w-6" />
                  </div>
                  <CardTitle className="text-xl">Хронические заболевания</CardTitle>
                </CardHeader>
                <CardContent>
                  <ul className="space-y-3 text-muted-foreground">
                    <li className="flex items-start gap-2 text-sm"><CheckCircle2 className="h-4 w-4 text-primary shrink-0 mt-0.5" /> <span>Сахарный диабет</span></li>
                    <li className="flex items-start gap-2 text-sm"><CheckCircle2 className="h-4 w-4 text-primary shrink-0 mt-0.5" /> <span>Гипертония и сердечная недостаточность</span></li>
                    <li className="flex items-start gap-2 text-sm"><CheckCircle2 className="h-4 w-4 text-primary shrink-0 mt-0.5" /> <span>Онкология (паллиативный уход)</span></li>
                    <li className="flex items-start gap-2 text-sm"><CheckCircle2 className="h-4 w-4 text-primary shrink-0 mt-0.5" /> <span>Артрит и артроз</span></li>
                  </ul>
                </CardContent>
              </Card>
            </div>

            <div className="mt-12 rounded-3xl bg-primary p-6 sm:p-10 text-center text-primary-foreground shadow-2xl shadow-primary/30">
              <p className="mb-8 text-lg font-medium leading-relaxed">Ваш случай не в списке? Наши врачи специализируются на комплексных решениях.</p>
              <Button size="lg" variant="secondary" className="rounded-full w-full sm:w-auto text-primary hover:bg-white transition-colors h-14">
                Проконсультироваться бесплатно
              </Button>
            </div>
          </div>
        </section>

        {/* Approach Section */}
        <section id="approach" className="py-16 lg:py-24">
          <div className="container mx-auto px-4">
            <div className="mb-12 lg:mb-16 text-center">
              <h2 className="mb-4 text-2xl font-bold tracking-tight text-primary sm:text-4xl">
                Забота, которая охватывает всё
              </h2>
              <p className="mx-auto max-w-3xl text-base sm:text-lg text-muted-foreground">
                Мы заменили разрозненные услуги единой системой care, где медицинская помощь неотделима от человеческого тепла.
              </p>
            </div>

            <div className="grid gap-10 lg:grid-cols-3">
              <div className="flex flex-col gap-4 p-6 rounded-3xl bg-primary/5">
                <div className="h-1 bg-primary/20 w-full mb-4 overflow-hidden rounded-full">
                  <div className="h-full bg-primary w-1/3" />
                </div>
                <h3 className="text-xl font-bold text-primary">Медицинский уход 24/7</h3>
                <ul className="space-y-4 text-muted-foreground">
                  <li className="flex items-start gap-3">
                    <div className="mt-1 shrink-0 rounded-full bg-primary/10 p-1 text-primary"><CheckCircle2 className="h-3 w-3" /></div>
                    <span className="text-sm sm:text-base">Контроль здоровья: давление, сахар, прием препаратов.</span>
                  </li>
                  <li className="flex items-start gap-3">
                    <div className="mt-1 shrink-0 rounded-full bg-primary/10 p-1 text-primary"><CheckCircle2 className="h-3 w-3" /></div>
                    <span className="text-sm sm:text-base">Профилактика и лечение пролежней.</span>
                  </li>
                  <li className="flex items-start gap-3">
                    <div className="mt-1 shrink-0 rounded-full bg-primary/10 p-1 text-primary"><CheckCircle2 className="h-3 w-3" /></div>
                    <span className="text-sm sm:text-base">Квалифицированные сиделки с мед. образованием.</span>
                  </li>
                </ul>
              </div>

              <div className="flex flex-col gap-4 p-6 rounded-3xl bg-primary/5">
                <div className="h-1 bg-primary/20 w-full mb-4 overflow-hidden rounded-full">
                  <div className="h-full bg-primary w-2/3" />
                </div>
                <h3 className="text-xl font-bold text-primary">Активная реабилитация</h3>
                <ul className="space-y-4 text-muted-foreground">
                  <li className="flex items-start gap-3">
                    <div className="mt-1 shrink-0 rounded-full bg-primary/10 p-1 text-primary"><CheckCircle2 className="h-3 w-3" /></div>
                    <span className="text-sm sm:text-base">Индивидуальные занятия ЛФК и гимнастикой.</span>
                  </li>
                  <li className="flex items-start gap-3">
                    <div className="mt-1 shrink-0 rounded-full bg-primary/10 p-1 text-primary"><CheckCircle2 className="h-3 w-3" /></div>
                    <span className="text-sm sm:text-base">Восстановительный и оздоровительный массаж.</span>
                  </li>
                  <li className="flex items-start gap-3">
                    <div className="mt-1 shrink-0 rounded-full bg-primary/10 p-1 text-primary"><CheckCircle2 className="h-3 w-3" /></div>
                    <span className="text-sm sm:text-base">Занятия по поддержанию когнитивных функций.</span>
                  </li>
                </ul>
              </div>

              <div className="flex flex-col gap-4 p-6 rounded-3xl bg-primary/5">
                <div className="h-1 bg-primary/20 w-full mb-4 overflow-hidden rounded-full">
                  <div className="h-full bg-primary w-full" />
                </div>
                <h3 className="text-xl font-bold text-primary">Безопасность и жизнь</h3>
                <ul className="space-y-4 text-muted-foreground">
                  <li className="flex items-start gap-3">
                    <div className="mt-1 shrink-0 rounded-full bg-primary/10 p-1 text-primary"><CheckCircle2 className="h-3 w-3" /></div>
                    <span className="text-sm sm:text-base">Специализированное питание по назначению врача.</span>
                  </li>
                  <li className="flex items-start gap-3">
                    <div className="mt-1 shrink-0 rounded-full bg-primary/10 p-1 text-primary"><CheckCircle2 className="h-3 w-3" /></div>
                    <span className="text-sm sm:text-base">Организованный досуг и социализация.</span>
                  </li>
                  <li className="flex items-start gap-3">
                    <div className="mt-1 shrink-0 rounded-full bg-primary/10 p-1 text-primary"><CheckCircle2 className="h-3 w-3" /></div>
                    <span className="text-sm sm:text-base">Психологическая поддержка для семей.</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>

        {/* Pricing Table */}
        <section id="prices" className="bg-secondary/30 py-16 lg:py-24">
          <div className="container mx-auto px-4">
            <h2 className="mb-10 text-2xl font-bold tracking-tight text-primary text-center sm:text-3xl">Стоимость услуг</h2>
            <div className="overflow-x-auto rounded-3xl border bg-card shadow-lg scrollbar-hide">
              <Table className="min-w-[600px] lg:min-w-full">
                <TableHeader className="bg-primary/5">
                  <TableRow>
                    <TableHead className="py-6 px-6 sm:px-8 text-base sm:text-lg font-bold">Наименование услуги</TableHead>
                    <TableHead className="py-6 px-6 sm:px-8 text-right text-base sm:text-lg font-bold">Стоимость</TableHead>
                  </TableRow>
                </TableHeader>
                <TableBody>
                  <TableRow>
                    <TableCell className="py-4 px-6 sm:px-8 font-medium">Первичная консультация по телефону</TableCell>
                    <TableCell className="py-4 px-6 sm:px-8 text-right text-primary font-bold">бесплатно</TableCell>
                  </TableRow>
                  <TableRow>
                    <TableCell className="py-4 px-6 sm:px-8 font-medium">Размещение в пансионате</TableCell>
                    <TableCell className="py-4 px-6 sm:px-8 text-right text-primary font-bold">от 1750 ₽ / сут</TableCell>
                  </TableRow>
                  <TableRow>
                    <TableCell className="py-4 px-6 sm:px-8 font-medium">Реабилитация</TableCell>
                    <TableCell className="py-4 px-6 sm:px-8 text-right text-primary font-bold">от 2000 ₽ / сут</TableCell>
                  </TableRow>
                  <TableRow>
                    <TableCell className="py-4 px-6 sm:px-8 font-medium">Вызов специалиста на дом</TableCell>
                    <TableCell className="py-4 px-6 sm:px-8 text-right text-primary font-bold">от 3000 ₽</TableCell>
                  </TableRow>
                  <TableRow>
                    <TableCell className="py-4 px-6 sm:px-8 font-medium border-b-0">Перевозка больных в пансионат</TableCell>
                    <TableCell className="py-4 px-6 sm:px-8 text-right text-primary font-bold border-b-0">от 2000 ₽</TableCell>
                  </TableRow>
                </TableBody>
              </Table>
            </div>
          </div>
        </section>

        {/* News Section */}
        <section className="py-16 lg:py-24 bg-background">
          <div className="container mx-auto px-4">
            <div className="flex flex-col sm:flex-row sm:items-center justify-between mb-10 gap-4">
              <h2 className="text-2xl font-bold tracking-tight text-primary sm:text-3xl">Новости и события</h2>
              <Button variant="ghost" className="text-primary hover:text-primary/80 self-start sm:self-auto p-0 sm:p-4">
                Все новости <ChevronRight className="ml-2 h-4 w-4" />
              </Button>
            </div>
            <div className="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
              {[
                {
                  date: "12 Марта",
                  title: "Весеннее обновление меню",
                  text: "Наши диетологи разработали новое сезонное меню с учетом потребностей пожилых людей.",
                  img: "https://images.unsplash.com/photo-1547592166-23ac45744acd?auto=format&fit=crop&q=80"
                },
                {
                  date: "05 Марта",
                  title: "Занятия арт-терапией",
                  text: "Творческие мастер-классы помогают поддерживать когнитивные функции и дарят радость общения.",
                  img: "https://images.unsplash.com/photo-1460661419201-fd4cecdf8a8b?auto=format&fit=crop&q=80"
                },
                {
                  date: "28 Февраля",
                  title: "Новое оборудование для ЛФК",
                  text: "Мы обновили зал реабилитации современными тренажерами для восстановления мобильности.",
                  img: "https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?auto=format&fit=crop&q=80"
                }
              ].map((news, i) => (
                <Card key={i} className="group overflow-hidden border-none shadow-lg hover:shadow-xl transition-all">
                  <div className="relative aspect-video overflow-hidden">
                    <Image 
                      src={news.img} 
                      alt={news.title}
                      fill
                      className="object-cover transition-transform group-hover:scale-105"
                    />
                    <div className="absolute top-4 left-4">
                      <Badge className="bg-primary text-primary-foreground">{news.date}</Badge>
                    </div>
                  </div>
                  <CardHeader>
                    <CardTitle className="group-hover:text-primary transition-colors text-lg sm:text-xl">{news.title}</CardTitle>
                  </CardHeader>
                  <CardContent>
                    <p className="text-sm text-muted-foreground leading-relaxed">{news.text}</p>
                  </CardContent>
                </Card>
              ))}
            </div>
          </div>
        </section>

        {/* Why Us Section */}
        <section className="py-16 lg:py-24 bg-secondary/10">
          <div className="container mx-auto px-4">
            <h2 className="mb-12 lg:mb-16 text-2xl font-bold tracking-tight text-primary text-center sm:text-4xl">
              Спокойствие вашей семьи — наш приоритет
            </h2>
            <div className="grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
              {[
                {
                  icon: <ShieldCheck className="h-6 w-6" />,
                  title: "Безопасность 24/7",
                  text: "Видеонаблюдение, тревожные кнопки, дежурная медсестра у постели больного."
                },
                {
                  icon: <MessageSquare className="h-6 w-6" />,
                  title: "Полная прозрачность",
                  text: "Ежедневные отчеты в мессенджере (фото, видео). Открытые двери для посещений."
                },
                {
                  icon: <Users className="h-6 w-6" />,
                  title: "Команда экспертов",
                  text: "Врачи-гериатры, неврологи, реабилитологи, психологи работают как единая команда."
                },
                {
                  icon: <CheckCircle2 className="h-6 w-6" />,
                  title: "Медицинская лицензия",
                  text: "Деятельность официально лицензирована. Гарантия качества и законности услуг."
                }
              ].map((item, i) => (
                <div key={i} className="flex flex-col gap-4 text-center items-center group">
                  <div className="flex h-16 w-16 items-center justify-center rounded-2xl bg-primary text-primary-foreground shadow-lg shadow-primary/20 transition-transform group-hover:scale-110">
                    {item.icon}
                  </div>
                  <h3 className="text-lg font-bold text-primary">{item.title}</h3>
                  <p className="text-sm text-muted-foreground leading-relaxed">{item.text}</p>
                </div>
              ))}
            </div>
          </div>
        </section>

        {/* Reviews Section */}
        <section id="reviews" className="bg-primary/5 py-16 lg:py-24">
          <div className="container mx-auto px-4">
            <h2 className="mb-12 lg:mb-16 text-2xl font-bold tracking-tight text-primary text-center sm:text-4xl">
              Истории семей
            </h2>
            <div className="mx-auto max-w-4xl">
              <Card className="border-none shadow-2xl p-6 sm:p-12 bg-white relative">
                <div className="absolute top-0 left-0 translate-x-4 sm:translate-x-8 -translate-y-4 text-primary opacity-20">
                  <Star className="h-12 w-12 sm:h-16 sm:w-16 fill-current" />
                </div>
                <blockquote className="relative z-10 space-y-6 text-center sm:text-left">
                  <div className="flex justify-center sm:justify-start gap-1 text-primary">
                    {[1, 2, 3, 4, 5].map((s) => <Star key={s} className="h-4 w-4 sm:h-5 sm:w-5 fill-current" />)}
                  </div>
                  <p className="text-lg sm:text-xl italic leading-relaxed text-foreground">
                    «После того как у отца диагностировали болезнь Паркинсона, мы не справлялись. В Extramed-Psy к нему вернулся интерес к жизни. С ним занимается инструктор ЛФК и психолог. Мы видим, как он тянется к общению. Спасибо за ваш труд и понимание!»
                  </p>
                  <footer className="flex flex-col sm:flex-row items-center gap-4 border-t pt-6 sm:pt-0 sm:border-t-0">
                    <div className="h-12 w-12 rounded-full bg-primary/20 flex items-center justify-center text-primary font-bold">СИ</div>
                    <div className="text-center sm:text-left">
                      <div className="font-bold">Семья Ивановых</div>
                      <div className="text-sm text-muted-foreground">г. Краснодар</div>
                    </div>
                  </footer>
                </blockquote>
              </Card>
            </div>
          </div>
        </section>

        {/* Steps Section */}
        <section className="py-16 lg:py-24 overflow-hidden">
          <div className="container mx-auto px-4">
            <h2 className="mb-16 text-2xl font-bold tracking-tight text-primary text-center sm:text-4xl">
              Всего 3 шага до спокойствия
            </h2>
            <div className="grid gap-12 lg:grid-cols-3 relative">
              <div className="hidden lg:block absolute top-12 left-1/4 right-1/4 h-0.5 bg-primary/10" />
              {[
                { step: "01", title: "Знакомство и диагностика", text: "Вы звоните или оставляете заявку. Наш врач бесплатно консультирует и оценивает состояние." },
                { step: "02", title: "Подбор программы", text: "Мы подбираем индивидуальную программу ухода и приглашаем на онлайн-экскурсию по пансионату." },
                { step: "03", title: "Комфортное заселение", text: "Помогаем с организацией безопасной перевозки и адаптацией нового резидента." }
              ].map((step, i) => (
                <div key={i} className="flex flex-col items-center text-center gap-6 relative z-10 bg-background lg:px-4 group">
                  <div className="h-16 w-16 rounded-full bg-primary flex items-center justify-center text-xl font-bold text-primary-foreground shadow-xl shadow-primary/20 group-hover:scale-110 transition-transform">
                    {step.step}
                  </div>
                  <h3 className="text-xl font-bold text-primary">{step.title}</h3>
                  <p className="text-sm sm:text-base text-muted-foreground">{step.text}</p>
                </div>
              ))}
            </div>
          </div>
        </section>

        {/* Final CTA */}
        <section className="bg-primary py-16 sm:py-24 text-primary-foreground overflow-hidden relative">
          <div className="container mx-auto px-4 text-center relative z-10">
            <h2 className="mb-6 text-2xl font-bold tracking-tight sm:text-5xl leading-tight">
              Время — самый ценный ресурс. <br className="hidden sm:block" /> Не теряйте его в сомнениях.
            </h2>
            <p className="mx-auto mb-10 max-w-2xl text-base sm:text-lg text-primary-foreground/80 px-4">
              Позвоните прямо сейчас, чтобы получить ответы на все вопросы, узнать о свободных местах и стоимости проживания.
            </p>
            <Button size="lg" variant="secondary" className="rounded-full w-full sm:w-auto px-12 h-16 text-lg sm:text-xl font-bold hover:scale-105 transition-transform shadow-2xl">
              <Phone className="mr-3 h-6 w-6" />
              Позвонить в пансионат
            </Button>
          </div>
          <div className="absolute top-0 left-0 w-64 h-64 bg-white/5 blur-3xl rounded-full -translate-x-1/2 -translate-y-1/2" />
          <div className="absolute bottom-0 right-0 w-96 h-96 bg-black/10 blur-3xl rounded-full translate-x-1/4 translate-y-1/4" />
        </section>
      </main>

      <footer className="border-t py-12 bg-secondary/10">
        <div className="container mx-auto px-4 text-center">
          <div className="flex items-center justify-center gap-2 mb-6">
            <Heart className="h-5 w-5 text-primary" />
            <span className="text-lg font-bold text-primary">Extramed-Psy</span>
          </div>
          <p className="text-xs sm:text-sm text-muted-foreground leading-relaxed max-w-xs mx-auto sm:max-w-none">
            © 2024 Все права защищены. <br className="sm:hidden" /> Пансионат для пожилых людей в Краснодаре.
          </p>
        </div>
      </footer>
    </div>
  );
}
