import React from 'react'
import Header from './components/Header'
import Hero from './components/Hero'
import About from './components/About'
import Services from './components/Services'
import GlossExpress from './components/GlossExpress'
import Gallery from './components/Gallery'
import Testimonials from './components/Testimonials'
import Location from './components/Location'
import Footer from './components/Footer'
import FloatingWhatsApp from './components/FloatingWhatsApp'

function App() {
  return (
    <div className="min-h-screen">
      <Header />
      <main>
        <Hero />
        <About />
        <Services />
        <GlossExpress />
        <Gallery />
        <Testimonials />
        <Location />
      </main>
      <Footer />
      <FloatingWhatsApp />
    </div>
  )
}

export default App
