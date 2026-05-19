import React, { useState, useEffect } from 'react';
import { MessageCircle } from 'lucide-react';

const FloatingWhatsApp = () => {
  const [isVisible, setIsVisible] = useState(false);

  useEffect(() => {
    const toggleVisibility = () => {
      if (window.pageYOffset > 300) {
        setIsVisible(true);
      } else {
        setIsVisible(false);
      }
    };

    window.addEventListener('scroll', toggleVisibility);
    return () => window.removeEventListener('scroll', toggleVisibility);
  }, []);

  return (
    <a
      href="https://wa.me/5541999999999"
      target="_blank"
      rel="noopener noreferrer"
      className={`fixed bottom-6 right-6 z-50 p-4 rounded-full bg-[#25D366] text-white shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-110 flex items-center justify-center ${
        isVisible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10 pointer-events-none'
      }`}
      aria-label="Agendar pelo WhatsApp"
    >
      <MessageCircle size={28} />
      <span className="absolute -top-10 right-0 bg-white text-bella-text text-sm py-1 px-3 rounded-lg shadow-md whitespace-nowrap opacity-0 transition-opacity duration-300 hover:opacity-100 peer-hover:opacity-100">
        Agende seu horário!
      </span>
    </a>
  );
};

export default FloatingWhatsApp;
