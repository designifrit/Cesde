using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using Microsoft.EntityFrameworkCore;
using neighborhoodStore.Models;

namespace neighborhoodStore.Controllers
{
    [Route("api/StoreItems")]
    [ApiController]
    public class StoreItemsController : ControllerBase
    {
        private readonly StoreContext _context;

        public StoreItemsController(StoreContext context)
        {
            _context = context;
        }

        // GET: api/StoreItems
        [HttpGet]
        public async Task<ActionResult<IEnumerable<StoreItem>>> GetStoreItems()
        {
            return await _context.StoreItems.ToListAsync();
        }

        // GET: api/StoreItems/5
        [HttpGet("{id}")]
        public async Task<ActionResult<StoreItem>> GetStoreItem(long id)
        {
            var storeItem = await _context.StoreItems.FindAsync(id);

            if (storeItem == null)
            {
                return NotFound();
            }

            return storeItem;
        }

        // PUT: api/StoreItems/5
        // To protect from overposting attacks, enable the specific properties you want to bind to, for
        // more details, see https://go.microsoft.com/fwlink/?linkid=2123754.
        [HttpPut("{id}")]
        public async Task<IActionResult> PutStoreItem(long id, StoreItem storeItem)
        {
            if (id != storeItem.Id)
            {
                return BadRequest();
            }

            _context.Entry(storeItem).State = EntityState.Modified;

            try
            {
                await _context.SaveChangesAsync();
            }
            catch (DbUpdateConcurrencyException)
            {
                if (!StoreItemExists(id))
                {
                    return NotFound();
                }
                else
                {
                    throw;
                }
            }

            return NoContent();
        }

        // POST: api/StoreItems
        // To protect from overposting attacks, enable the specific properties you want to bind to, for
        // more details, see https://go.microsoft.com/fwlink/?linkid=2123754.
        [HttpPost]
        public async Task<ActionResult<StoreItem>> PostStoreItem(StoreItem storeItem)
        {
            _context.StoreItems.Add(storeItem);
            await _context.SaveChangesAsync();

            //return CreatedAtAction("GetTodoItem", new { id = todoItem.Id }, todoItem);
            return CreatedAtAction(nameof(GetStoreItem), new { id = storeItem.Id }, storeItem);
        }

        // DELETE: api/StoreItems/5
        [HttpDelete("{id}")]
        public async Task<ActionResult<StoreItem>> DeleteStoreItem(long id)
        {
            var storeItem = await _context.StoreItems.FindAsync(id);
            if (storeItem == null)
            {
                return NotFound();
            }

            _context.StoreItems.Remove(storeItem);
            await _context.SaveChangesAsync();

            return storeItem;
        }

        private bool StoreItemExists(long id)
        {
            return _context.StoreItems.Any(e => e.Id == id);
        }
    }
}
