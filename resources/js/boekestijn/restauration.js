import Luminous, { LuminousGallery } from 'luminous-lightbox';


export default class Restauration {
    constructor() {
        this.RestaurationImage();
    }

    RestaurationImage() {
        new LuminousGallery(document.querySelectorAll('.restoration .luminous'));
    }
}
