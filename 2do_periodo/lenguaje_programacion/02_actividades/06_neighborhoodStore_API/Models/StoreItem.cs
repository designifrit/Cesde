using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace neighborhoodStore.Models
{
    public class StoreItem
    {
        public long Id { get; set; }
        public string Name { get; set; }
        public string Brand { get; set; }
        public string Description { get; set; }
        public decimal Price { get; set; }
        public bool Availability { get; set; }

        public virtual ICollection<PurchaseItem> PurchaseItems { get; set; }
    }
}