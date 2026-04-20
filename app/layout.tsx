import './globals.css';
import {  Geist_Mono } from 'next/font/google';

const geistMono = Geist_Mono({ subsets: ['latin'] });

export const metadata = {
  title: 'AndreiSNRQ | Portfolio',
  description: 'A Fullstack Web Developer Portfolio',
};

export default function RootLayout({ children }: { children: React.ReactNode }) {
  return (
    <html lang="en">
      <body className={geistMono.className + ' bg-background text-foreground min-h-screen'}>
        {children}
      </body>
    </html>
  );
}